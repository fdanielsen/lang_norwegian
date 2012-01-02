<?php

	Class extension_lang_norwegian extends Extension {

		/**
		 * Extension information
		 */
		public function about () {
			return array(
				'name' => 'Language: Norsk bokmål',
				'type' => 'Localisation',
				'version' => '1.1',
				'release-date' => '2012-01-02',
				'author' => array(
					'name' => 'Frode Danielsen',
					'website' => 'http://e5r.no/',
					'email' => 'frode@e5r.no'
				),
				'description' => 'Official Norwegian translation for the Symphony backend',
				'compatibility' => array(
					'2.0.0' => false,
					'2.0.1' => false,
					'2.0.2' => false,
					'2.0.3' => false,
					'2.0.4' => false,
					'2.0.5' => false,
					'2.0.6' => false,
					'2.0.7' => true,
					'2.1.0' => true,
					'2.2' => true
				)
			);
		}

	}
	
