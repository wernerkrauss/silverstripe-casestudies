<?php

/**
 * Created by IntelliJ IDEA.
 * User: Werner M. Krauß <werner.krauss@netwerkstatt.at>
 * Date: 27.10.2015
 * Time: 15:21
 */
if (class_exists('SinglePageAdmin')) {
	class CaseStudyAdmin extends SinglePageAdmin {

		private static $menu_title = 'Case Studies';
		private static $tree_class = 'CaseStudyHolder';
		private static $url_segment = 'case-studies';

	}
}
