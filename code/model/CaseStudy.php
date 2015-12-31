<?php
/**
 * Created by IntelliJ IDEA.
 * User: Werner M. Krauß <werner.krauss@netwerkstatt.at>
 * Date: 20.10.2015
 * Time: 18:01
 */

/**
 * StartGeneratedWithDataObjectAnnotator
 * @property string Title
 * @property string Date
 * @property string Summary
 * @property string Content
 * @property boolean IsActive
 * @property boolean Highlight
 * @property string Customer
 * @property string URLSlug
 * @property int CaseStudyHolderID
 * @method CaseStudyHolder CaseStudyHolder
 * @mixin Slug("Title", null, true)
 * EndGeneratedWithDataObjectAnnotator
 */
class CaseStudy extends DataObject
{

    private static $extensions = array(
        'Slug("Title", null, true)', //adds URLSlug field and some logic
    );

    private static $db = array(
        'Title' => 'Varchar(255)',
        'Date' => 'Date',
        'Summary' => 'Text',
        'Content' => 'HTMLText',
        'IsActive' => 'Boolean',
        'Highlight' => 'Boolean',
        'Customer' => 'Varchar',
    );

    private static $has_one = array(
        'CaseStudyHolder' => 'CaseStudyHolder'
    );

    private static $singular_name = 'Case Study';

    private static $plural_name = 'Case Studies';

    private static $summary_fields = [
        'Title',
        'Date',
        'IsActive.Nice' => 'IsActive'
    ];

    private static $searchable_fields = array();

    private static $default_sort = 'Highlight DESC, Date DESC';

    /**
     * for configuring fluent
     * @var array
     */
    private static $translate = [
        'Title',
        'Summary',
        'Content',
        'Customer',
        'URLSlug'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName(['CaseStudyHolderID']);

        $this->extend('updateCMSFields', $fields);

        return $fields;
    }

    public function onBeforeWrite()
    {
        if (!$this->Date) {
            $this->Date = date('Y-m-d');
        }
        parent::onBeforeWrite();
    }

    /**
     * Link to this DO
     * @return string
     */
    public function Link()
    {
        if (!$this->CaseStudyHolderID) {
            return;
        }

        $slug = $this->URLSlug;
        $link = $this->CaseStudyHolder()->Link($slug);

        $this->extend('UpdateLink', $link);

        return $link;
    }
}
