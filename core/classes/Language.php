<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr4
 *
 *  License: MIT
 *
 *  Language class
 */
class Language {
	
	// Variables
	private $_activeLanguage,
			$_activeLanguageDirectory,
			$_activeLanguageEntries,
			$_module;
	
	// Construct Language class
	// Params: 	$active_language (string) 	- contains the active language set in cache (optional)
	//			$module (string)			- contains the path of the language files for custom modules (optional)
	public function __construct($module = null, $active_language = null){
		if(!$active_language){
			// No active language set, default to EnglishUK
			$this->_activeLanguage 		= 'EnglishUK';
		} else {
			$this->_activeLanguage 		= $active_language;
		}
		
		// Require file
		if(!$module || ($module && $module == 'core')){
			$path = join(DIRECTORY_SEPARATOR, array(ROOT_PATH, 'custom', 'languages', $this->_activeLanguage));
			$this->_module = 'Core';
		} else {
			$path = str_replace('/', DIRECTORY_SEPARATOR, $module) . DIRECTORY_SEPARATOR . $this->_activeLanguage;
			$this->_module = htmlspecialchars($module);
		}
		
		$this->_activeLanguageDirectory = $path;
		
		// HTML language definition
		if(is_file($path . DIRECTORY_SEPARATOR . 'version.php')){
			require($path . DIRECTORY_SEPARATOR . 'version.php');
			
			if(isset($language_html)){
				if(!defined('HTML_LANG')){
					define('HTML_LANG', $language_html);
				}
			}

			if(isset($language_rtl)){
			    if(!defined('HTML_RTL')){
			        define('HTML_RTL', $language_rtl);
                }
            }
		}
	}

	// Return a term in the currently active language
	// Params: 	$file (string) - name of file to look in, without file extension (required)
	//			$term (string) - contains the term to translate (required)
	public function get($file, $term){
		// Ensure the file exists + term is set
		if(!is_file($this->_activeLanguageDirectory . DIRECTORY_SEPARATOR . $file . '.php')){
			if($this->_activeLanguage != 'EnglishUK'){
				if(is_file(rtrim($this->_activeLanguageDirectory, $this->_activeLanguage) . DIRECTORY_SEPARATOR . 'EnglishUK' . DIRECTORY_SEPARATOR . $file . '.php')){
					if(!isset($this->_activeLanguageEntries[$file])){
						require(rtrim($this->_activeLanguageDirectory, $this->_activeLanguage) . DIRECTORY_SEPARATOR . 'EnglishUK' . DIRECTORY_SEPARATOR . $file . '.php');
						$this->_activeLanguageEntries[$file] = $language;
					}
				} else {
					die('Error loading language file ' . htmlspecialchars($file) . '.php in ' . ($this->_module == 'Core' ? 'Core' : $this->_module));
				}
			} else {
				die('Error loading language file ' . htmlspecialchars($file) . '.php in ' . ($this->_module == 'Core' ? 'Core' : $this->_module));
			}
		} else {
			if(!isset($this->_activeLanguageEntries[$file])){
				require($this->_activeLanguageDirectory . DIRECTORY_SEPARATOR . $file . '.php');
				$this->_activeLanguageEntries[$file] = $language;
			}
		}

		if(isset($this->_activeLanguageEntries[$file][$term])){
			// It is set, return it
			return $this->_activeLanguageEntries[$file][$term];
		} else {
			// Not set, display an error
			return 'Term ' . htmlspecialchars($term) . ' not set';
		}
	}
	
	// Return the current time language
	// No parameters
	public function getTimeLanguage(){
		// Return time language variable
		$this->get('time', 'time');
		return $this->_activeLanguageEntries['time'];
	}
	
	// Return the current active language
	// No parameters
	public function getActiveLanguage(){
		return $this->_activeLanguage;
	}

}