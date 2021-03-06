<?php

/**
 * Class Edu
 * @method static void UF_BEGIN_TIME_type_datetime()
 * @method static UF_END_TIME_type_datetime()
 * @method static UF_SITE_type_string()
 * @method static UF_DOCUMENT_type_file()
 * @method static UF_TIME_ADDITION_type_string()
 * @method static UF_GENERAL_EXPERIENCE_type_string()
 * @method static UF_PROFESSION_EXPERIENCE_type_string()
 * @method static UF_POSITION_type_string()
 * @method static UF_SUBJECT_type_string()
 * @method static UF_DEGREE_type_string()
 * @method static UF_RANK_type_string()
 * @method static UF_ASSESSMENT_type_string()
 * @method static addUG_FOUNDERS()
 * @method static addUG_BRANCHES()
 * @method static addUG_MAIN()
 * @method static addUG_DEPARTMENT()
 * @method static addUG_ACADEMIC_COUNCIL()
 * @method static addUG_LEADERSHIP()
 * @method static addUG_STAFF()
 * @method static addUG_GRADUATE()
 * @method static addIB_DOCUMENTS()
 * @method static addIB_PROFESSIONS()
 * @method static addIB_FACULTIES()
 * @method static addIB_SUBJECTS()
 * @method static addIB_DEPARTMENTS()
 * @method static addIB_LIBRARY()
 * @method static addIB_NEWS()
 * @method static addIB_ADVERTISE()
 * @method static addIB_DORMS()
 * @method static addIB_CREATIVES()
 * @method static addIB_CONFERENCES()
 * @method static addIB_TRAINING_MATERIALS()
 * @method static addIB_REVIEWS()
 * @method static addIB_TRAININGS()
 * @method static UF_PROFESSION_type_iblock_element(array $array)
 * @method static UF_DEPARTMENT_type_iblock_element(array $array)
 * @method static addPropertyIB_FILE_type_F($documentsIblockId)
 * @method static addPropertyIB_FORM_OF_EDUCATION_type_L($documentsIblockId)
 * @method static addPropertyIB_PERIOD_type_L($professionsIblockId)
 * @method static addPropertyIB_PERIOD_type_S($professionsIblockId)
 * @method static addPropertyIB_LEVEL_type_L($professionsIblockId)
 * @method static addPropertyIB_CODE_type_S($professionsIblockId)
 * @method static addPropertyIB_DESCRIPTION_type_S($professionsIblockId)
 * @method static addPropertyIB_PLAN_type_F($professionsIblockId)
 * @method static addPropertyIB_ANNOTATIONS_type_F($professionsIblockId)
 * @method static addPropertyIB_SCHEDULE_type_F($professionsIblockId)
 * @method static addPropertyIB_ACCREDITATION_PERIOD_type_S($professionsIblockId)
 * @method static addPropertyIB_METHODOLOGICAL_DOCUMENTS_type_F($professionsIblockId, $null, bool $true)
 * @method static addPropertyIB_PRACTICES_type_F($professionsIblockId, $null, bool $true)
 * @method static addPropertyIB_BUDGET_COUNT_type_S($professionsIblockId)
 * @method static addPropertyIB_PAYED_COUNT_type_S($professionsIblockId)
 * @method static addPropertyIB_PRICE_type_S($professionsIblockId)
 * @method static addPropertyIB_PREPARATORY_PROFILE_type_S($professionsIblockId)
 * @method static addPropertyIB_PRINCIPAL_SUBJECTS_type_S($professionsIblockId)
 * @method static addPropertyIB_LANGUAGES_type_L($professionsIblockId)
 * @method static addPropertyIB_RESEARCHES_type_F($professionsIblockId)
 * @method static addPropertyIB_RESULTS_type_F($professionsIblockId)
 * @method static addPropertyIB_REPLACED_RESULTS_type_F($professionsIblockId)
 * @method static addPropertyIB_FACULTY_type_F($professionsIblockId)
 * @method static addPropertyIB_FACULTY_type_E($professionsIblockId, $null, false $false, $facultiesIblockId)
 * @method static addPropertyIB_PRELIMINARY_TESTS_type_E($professionsIblockId, $null, bool $true, $subjectsIblockId)
 * @method static addPropertyIB_ADDRESS_type_S($dormInfoblockId)
 * @method static addPropertyIB_ENTITY_type_L($newsIblockId)
 * @method static addPropertyIB_CREATIVE_LEADERSHIP_type_S($creativeInfoblockId)
 * @method static addPropertyIB_TIMETABLE_type_S($creativeInfoblockId)
 * @method static addPropertyIB_TIME_type_S($creativeInfoblockId)
 * @method static addPropertyIB_PLACE_type_S($creativeInfoblockId)
 * @method static addPropertyIB_PASS_PERIOD_type_S($creativeInfoblockId)
 * @method static addPropertyIB_ORGANIZATOR_PERIOD_type_S($conferenceInfoblockId)
 * @method static addPropertyIB_USER_type_S($reviewsInfoblockId)
 * @method static addEnumPV_EXTRAMURAL($formOfEducationid)
 * @method static addEnumPV_INTERNAL($formOfEducationid)
 * @method static addEnumPV_BACHELOR($formOfEducationid)
 * @method static addEnumPV_MAGISTRACY($levelId)
 * @method static addEnumPV_GRADUATE_SCHOOL($levelId)
 * @method static addEnumPV_SPECIALIST($levelId)
 * @method static addEnumPV_RUSSIAN($languagesId)
 * @method static addEnumPV_ITALIAN($languagesId)
 * @method static addEnumPV_ENGLISH($languagesId)
 * @method static addEnumPV_STUDENT($entityId)
 * @method static addEnumPV_UNIVERSITY($entityId)
 * @method static deleteUserF_BEGIN_TIME()
 * @method static deleteUserF_END_TIME()
 * @method static deleteUserF_SITE()
 * @method static deleteUserF_DOCUMENT()
 * @method static deleteUserF_TIME_ADDITION()
 * @method static deleteUserF_GENERAL_EXPERIENCE()
 * @method static deleteUserF_PROFESSION_EXPERIENCE()
 * @method static deleteUserF_POSITION()
 * @method static deleteUserF_SUBJECT()
 * @method static deleteUserF_DEGREE()
 * @method static deleteUserF_RANK()
 * @method static deleteUserF_ASSESSMENT()
 * @method static deleteUserF_PROFESSION()
 * @method static deleteUserF_DEPARTMENT()
 * @method static deleteUG_FOUNDERS()
 * @method static deleteUG_BRANCHES()
 * @method static deleteUG_MAIN()
 * @method static deleteUG_DEPARTMENT()
 * @method static deleteUG_ACADEMIC_COUNCIL()
 * @method static deleteUG_LEADERSHIP()
 * @method static deleteUG_STAFF()
 * @method static deleteUG_GRADUATE()
 * @method static deletePropertyIB_FILE($documentsIblockId)
 * @method static deletePropertyIB_FORM_OF_EDUCATION($documentsIblockId)
 * @method static deletePropertyIB_PERIOD($professionsIblockId)
 * @method static deletePropertyIB_ACCREDITATION_PERIOD($professionsIblockId)
 * @method static deletePropertyIB_LEVEL($professionsIblockId)
 * @method static deletePropertyIB_DESCRIPTION($professionsIblockId)
 * @method static deletePropertyIB_PLAN($professionsIblockId)
 * @method static deletePropertyIB_ANNOTATIONS($professionsIblockId)
 * @method static deletePropertyIB_SCHEDULE($professionsIblockId)
 * @method static deletePropertyIB_METHODOLOGICAL_DOCUMENTS($professionsIblockId)
 * @method static deletePropertyIB_PRACTICES($professionsIblockId)
 * @method static deletePropertyIB_BUDGET_COUNT($professionsIblockId)
 * @method static deletePropertyIB_PAYED_COUNT($professionsIblockId)
 * @method static deletePropertyIB_PRICE($professionsIblockId)
 * @method static deletePropertyIB_PREPARATORY_PROFILE($professionsIblockId)
 * @method static deletePropertyIB_PRINCIPAL_SUBJECTS($professionsIblockId)
 * @method static deletePropertyIB_LANGUAGES($professionsIblockId)
 * @method static deletePropertyIB_RESEARCHES($professionsIblockId)
 * @method static deletePropertyIB_RESULTS($professionsIblockId)
 * @method static deletePropertyIB_REPLACED_RESULTS($professionsIblockId)
 * @method static deletePropertyIB_FACULTY($professionsIblockId)
 * @method static deletePropertyIB_PRELIMINARY_TESTS($professionsIblockId)
 * @method static deletePropertyIB_ADDRESS($dormInfoblockId)
 * @method static deletePropertyIB_ENTITY($newsIblockId)
 * @method static deletePropertyIB_CREATIVE_LEADERSHIP($creativeInfoblockId)
 * @method static deletePropertyIB_TIMETABLE($creativeInfoblockId)
 * @method static deletePropertyIB_TIME($creativeInfoblockId)
 * @method static deletePropertyIB_PLACE($creativeInfoblockId)
 * @method static deletePropertyIB_PASS_PERIOD($creativeInfoblockId)
 * @method static deletePropertyIB_ORGANIZATOR_PERIOD($conferenceInfoblockId)
 * @method static deletePropertyIB_USER($reviewsInfoblockId)
 * @method static deletePropertyIB_CODE($professionsIblockId)
 * @method static addIB_SLIDER()
 */
class Edu extends CModule
{
    const DIRECTORY = 'local/modules/edu/install';
    const ID = 'edu';
    const ALL_USERS_GROUP_ID = 2;
    const READ_PERMISSION = 'R';
    const DOCUMENTS_INFOBLOCK_CODE = 'DOCUMENTS';
    const PROFESSIONS_INFOBLOCK_CODE = 'PROFESSIONS';
    const FACULTIES_INFOBLOCK_CODE = 'FACULTIES';
    const SUBJECTS_INFOBLOCK_CODE = 'SUBJECTS';
    const DEPARTMENTS_INFOBLOCK_CODE = 'DEPARTMENTS';
    const LIBRARY_INFOBLOCK_CODE = 'LIBRARY';
    const NEWS_INFOBLOCK_CODE = 'NEWS';
    const ADVERTISEMENT_INFOBLOCK_CODE = 'ADVERTISE';
    const DORM_INFOBLOCK_CODE = 'DORMS';
    const CREATIVE_INFOBLOCK_CODE = 'CREATIVES';
    const CONFERENCE_INFOBLOCK_CODE = 'CONFERENCES';
    const TRAINING_MATERIALS_INFOBLOCK_CODE = 'TRAINING_MATERIALS';
    const REVIEWS_INFOBLOCK_CODE = 'REVIEWS';
    const TRAININGS_INFOBLOCK_CODE = 'TRAININGS';
    const SLIDER_INFOBLOCK_CODE = 'SLIDER';
    const SITE_ID = 's1';
    const UF = 'UF_';
    const TYPE = '_type_';
    const ADD_UG = 'addUG_';
    const ADD_IB = 'addIB_';
    const ADD_PROPERTY_IB = 'addPropertyIB_';
    const ADD_ENUM_PV = 'addEnumPV_';
    const DELETE_UF = 'deleteUserF_';
    const DELETE_UG = 'deleteUG_';
    const DELETE_PROPERTY_IB = 'deletePropertyIB_';
    private static CUserTypeEntity $userTypeEntity;
    private static CGroup $userGroup;
    private static CIBlock $ib;
    private static CIBlockProperty $iBlockProperty;
    private static CIBlockPropertyEnum $iBPEnum;

    var $MODULE_ID = "edu";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;

    function __construct()
    {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path . "/version.php");

        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion)) {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }

        $this->MODULE_NAME = sprintf(GetMessage('module_title'), self::ID);
        $this->MODULE_DESCRIPTION = GetMessage('module_description');

        \CModule::IncludeModule('iblock');
    }

    /**
     * @return CIBlockPropertyEnum
     */
    private static function getIBlockPropertyEnum()
    {
        self::$iBPEnum = self::$iBPEnum ?? (new \CIBlockPropertyEnum());
        return self::$iBPEnum;
    }

    /**
     * @param $name
     * @param $propertyId
     * @throws \Bitrix\Main\DB\Exception
     */
    private static function addEnumPVMethod($name, $propertyId)
    {
        if (strpos($name, self::ADD_ENUM_PV) !== FALSE) {
            $parts = explode(self::ADD_ENUM_PV, $name);
            $id = $parts[1];
            self::addEnumPropertyValue(self::getIBlockPropertyEnum(), $propertyId, GetMessage("{$id}_TITLE"));
        }
    }

    /**
     * @return CIBlockProperty
     */
    private static function getIBlockProperty()
    {
        self::$iBlockProperty = self::$iBlockProperty ?? (new \CIBlockProperty());
        return self::$iBlockProperty;
    }

    /**
     * @param $name
     * @param $iblockId
     * @param null $userType
     * @param bool $isMultiple
     * @param null $linkIblockId
     * @return int|mixed
     * @throws \Bitrix\Main\DB\Exception
     */
    private static function addIBPropertyMethod($name, $iblockId, $userType = null, $isMultiple = false, $linkIblockId = null)
    {
        $id = 0;
        if (strpos($name, self::ADD_PROPERTY_IB) !== FALSE) {
            $parts = explode(self::ADD_PROPERTY_IB, $name);
            $parts = explode(self::TYPE, $parts[1]);
            $id = $parts[0];
            $type = $parts[1];
            $id = Edu::addInfoblockProperty(self::getIBlockProperty(),
                GetMessage("{$id}_TITLE"),
                $id,
                $type,
                $iblockId,
                $userType,
                $isMultiple,
                $linkIblockId
            );
        }
        return $id;
    }

    /**
     * @param $name
     * @param $iblockId
     * @throws \Bitrix\Main\DB\Exception
     */
    private static function deleteIBPropertyMethod($name, $iblockId)
    {
        if (strpos($name, self::DELETE_PROPERTY_IB) !== FALSE) {
            $parts = explode(self::DELETE_PROPERTY_IB, $name);
            $name = $parts[1];
            self::deleteInfoblockProperty($name, $iblockId);
        }
    }

    /**
     * @param $name
     * @return int|mixed
     * @throws \Bitrix\Main\DB\Exception
     */
    private static function addIBMethod($name)
    {
        global $moduleId;
        $id = 0;
        if (strpos($name, self::ADD_IB) !== FALSE) {
            $parts = explode(self::ADD_IB, $name);
            $ibName = $parts[1];
            $id = self::addInfoblock(self::getIB(), GetMessage("{$ibName}_TITLE"), $ibName, $moduleId);
        }
        return $id;
    }

    /**
     * @return CIBlock
     */
    public static function getIB()
    {
        self::$ib = self::$ib ?? (new \CIBlock);
        return self::$ib;
    }

    /**
     * @param $name
     * @throws \Bitrix\Main\DB\Exception
     */
    private static function addUGMethod($name)
    {
        if (strpos($name, self::ADD_UG) !== FALSE) {
            $parts = explode(self::ADD_UG, $name);
            $groupName = $parts[1];
            Edu::addUserGroup(self::getUserGroup(), GetMessage("RU_$groupName"), GetMessage($groupName));
        }
    }

    /**
     * @param $name
     * @param array $params
     * @throws \Bitrix\Main\DB\Exception
     */
    private static function addUFMethod($name, $params = [])
    {
        if (strpos($name, self::UF) !== FALSE) {
            $parts = explode(self::UF, $name);
            $parts = explode(self::TYPE, $parts[1]);
            $id = $parts[0];
            $type = $parts[1];
            self::addUserField(self::getUserTypeEntity(),
                "UF_$id",
                $type,
                $id,
                GetMessage("{$id}_RU_TITLE"),
                GetMessage("{$id}_EN_TITLE"),
                $params);
        }
    }

    private static function deleteUserFieldMethod($name)
    {
        if (strpos($name, self::DELETE_UF) !== FALSE) {
            $name = 'UF_' . explode(self::DELETE_UF, $name)[1];
            Edu::deleteUserField(self::getUserTypeEntity(), $name);
        }
    }

    /**
     * @param $name
     * @throws \Bitrix\Main\DB\Exception
     */
    private static function deleteUserGroupMethod($name)
    {
        if (strpos($name, self::DELETE_UG) !== FALSE) {
            $name = explode(self::DELETE_UG, $name)[1];
            Edu::deleteUserGroup($name);
        }
    }

    function InstallFiles()
    {
        return true;
    }

    function UnInstallFiles()
    {
        return true;
    }

    function DoInstall()
    {
        /**
         * \CDatabase $DB
         */
        global $DOCUMENT_ROOT, $APPLICATION, $DB, $moduleId;
        try {
            $DB->StartTransaction();
            RegisterModule(self::ID);
            $moduleId = self::ID;
            $APPLICATION->IncludeAdminFile(sprintf(GetMessage('module_setup_step_title'), self::ID), $DOCUMENT_ROOT . "/" . self::DIRECTORY . "/step.php");
        } catch (\Exception $e) {
            $APPLICATION->IncludeAdminFile($e->getMessage(), $DOCUMENT_ROOT . "/" . self::DIRECTORY . "/error_step.php");
        }
    }

    function DoUninstall()
    {
        /**
         * @var \CDatabase $DB
         */
        global $DOCUMENT_ROOT, $APPLICATION, $DB, $moduleId;
        try {
            $DB->StartTransaction();
            UnRegisterModule(self::ID);
            $moduleId = self::ID;
            $APPLICATION->IncludeAdminFile(sprintf(GetMessage('module_setup_step_title'), self::ID), $DOCUMENT_ROOT . "/" . self::DIRECTORY . "/unstep.php");
        } catch (Exception $e) {
            $APPLICATION->IncludeAdminFile($e->getMessage(), $DOCUMENT_ROOT . "/" . self::DIRECTORY . "/error_unstep.php");
        }
    }

    /**
     * @param $type
     * @param $code
     * @return mixed
     */
    public static function getIblockId($type, $code)
    {
        return \CIBlock::GetList([
            'ID' => 'ASC'
        ], [
            'TYPE' => $type,
            'CODE' => $code,
        ])->Fetch()['ID'];
    }

    /**
     * @param $oUserTypeEntity
     * @param $fieldName
     */
    public static function deleteUserField($oUserTypeEntity, $fieldName)
    {
        $oUserTypeEntity->Delete(CUserTypeEntity::GetList([
            'ID' => 'ASC'
        ], [
            'ENTITY_ID' => 'USER',
            'FIELD_NAME' => $fieldName
        ])->Fetch()['ID']);
    }

    /**
     * @param $name
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function deleteUserGroup($name)
    {
        /**
         * @var \CDatabase $DB
         */
        global $DB;
        $by = 'id';
        $order = 'asc';
        $filter = [
            'STRING_ID' => $name
        ];
        if (!\CGroup::Delete(\CGroup::GetList($by, $order, $filter)->Fetch()['ID'])) {
            $DB->Rollback();
            throw new \Bitrix\Main\DB\Exception(GetMessage('db_delete_error'));
        }
    }

    /**
     * @param $code
     * @param $id
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function deleteInfoblockProperty($code, $id)
    {
        /**
         * @var \CDatabase $DB
         */
        global $DB;
        if (!\CIBlockProperty::Delete(\CIBlockProperty::GetList([
            'ID' => 'ASC'
        ], [
            'CODE' => $code,
            'IBLOCK_ID' => $id
        ])->Fetch()['ID'])) {
            $DB->Rollback();
            throw new \Bitrix\Main\DB\Exception(GetMessage('db_delete_error'));
        }
    }

    /**
     * @param $id
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function deleteInfoblock($id)
    {
        /**
         * @var \CDatabase $DB
         */
        global $DB;
        if (!\CIBlock::Delete($id)) {
            $DB->Rollback();
            throw new \Bitrix\Main\DB\Exception(GetMessage('db_delete_error'));
        }
    }

    /**
     * @param $oUserTypeEntity
     * @param $name
     * @param $type
     * @param $xmlId
     * @param $ruLabel
     * @param $enLabel
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function addUserField($oUserTypeEntity,
                                        $name,
                                        $type,
                                        $xmlId,
                                        $ruLabel,
                                        $enLabel,
                                        $settings = [])
    {
        /**
         * @var \CDatabase $DB
         */
        global $DB;
        $aUserFields = [
            'ENTITY_ID' => 'USER',
            'FIELD_NAME' => $name,
            'USER_TYPE_ID' => $type,
            'XML_ID' => $xmlId,
            'SORT' => 500,
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => '',
            'EDIT_IN_LIST' => '',
            'IS_SEARCHABLE' => 'N',
            'EDIT_FORM_LABEL' => [
                'ru' => $ruLabel,
                'en' => $enLabel
            ],
            'LIST_COLUMN_LABEL' => [
                'ru' => $ruLabel,
                'en' => $enLabel,
            ],
            'LIST_FILTER_LABEL' => [
                'ru' => $ruLabel,
                'en' => $enLabel,
            ],
            'ERROR_MESSAGE' => [
                'ru' => GetMessage('completing_error'),
                'en' => GetMessage('en_completing_error'),
            ],
            'HELP_MESSAGE' => [
                'ru' => '',
                'en' => '',
            ]
        ];
        if ($settings) {
            $aUserFields['SETTINGS'] = $settings;
        }
        $res = $oUserTypeEntity->Add($aUserFields);
        if (!$res) {
            $DB->Rollback();
            throw new \Bitrix\Main\DB\Exception(GetMessage('db_add_user_field_error'));
        }
    }

    /**
     * @param $group
     * @param $name
     * @param $id
     * @return
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function addUserGroup($group, $name, $id)
    {
        /**
         * @var \CDatabase $group
         */
        global $DB;
        $arFields = [
            "ACTIVE" => "Y",
            "C_SORT" => 100,
            "NAME" => $name,
            "DESCRIPTION" => $name,
            "USER_ID" => [],
            "STRING_ID" => $id
        ];
        $id = $group->Add($arFields);
        if (strlen($group->LAST_ERROR) > 0) {
            $DB->Rollback();
            throw new \Bitrix\Main\DB\Exception(GetMessage('db_add_user_group_error'));
        }
        return $id;
    }

    /**
     * @param \CIBlockElement $ib
     * @param $name
     * @param $code
     * @param $type
     * @return mixed
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function addInfoblock($ib, $name, $code, $type)
    {
        /**
         * @var \CDatabase $DB
         */
        global $DB;
        $arFields = [
            "NAME" => $name,
            "CODE" => $code,
            "LIST_PAGE_URL" => '',
            "DETAIL_PAGE_URL" => '',
            "IBLOCK_TYPE_ID" => $type,
            "SITE_ID" => [Edu::SITE_ID],
            'LID' => Edu::SITE_ID,
            "GROUP_ID" => [Edu::ALL_USERS_GROUP_ID => Edu::READ_PERMISSION]
        ];
        $id = $ib->Add($arFields);
        if (!($id > 0)) {
            $DB->Rollback();
            throw new \Bitrix\Main\DB\Exception($ib->LAST_ERROR);
        }
        return $id;
    }

    /**
     * @param CIBlockProperty $property
     * @param $name
     * @param $code
     * @param $type
     * @param $iblockId
     * @param null $userType
     * @param bool $isMultiple
     * @param null $linkIblockId
     * @return mixed
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function addInfoblockProperty($property,
                                                $name,
                                                $code,
                                                $type,
                                                $iblockId,
                                                $userType = null,
                                                $isMultiple = false,
                                                $linkIblockId = null
    )
    {
        /**
         * @var \CDatabase $DB
         */
        global $DB;
        $arFields = [
            "NAME" => $name,
            "CODE" => $code,
            "PROPERTY_TYPE" => $type,
            "IBLOCK_ID" => $iblockId,
        ];
        if ($userType) {
            $arFields['USER_TYPE'] = $userType;
        }
        if ($isMultiple) {
            $arFields['MULTIPLE'] = 'Y';
        }
        if ($linkIblockId) {
            $arFields['LINK_IBLOCK_ID'] = $linkIblockId;
        }
        $id = $property->Add($arFields);
        if (!($id > 0)) {
            $DB->Rollback();
            throw new \Bitrix\Main\DB\Exception(GetMessage('db_add_infoblock_property_error'));
        }
        return $id;
    }

    /**
     * @param $iBPEnum
     * @param $id
     * @param $value
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function addEnumPropertyValue($iBPEnum, $id, $value)
    {
        /**
         * @var \CDatabase $DB
         */
        global $DB;
        if (!($iBPEnum->Add(['PROPERTY_ID' => $id, 'VALUE' => $value]))) {
            $DB->Rollback();
            throw new \Bitrix\Main\DB\Exception(GetMessage('db_add_infoblock_property_value_error'));
        }
    }

    /**
     * @param $id
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function deleteInfoblockPropertyEnumValues($id)
    {
        /**
         * @var \CDatabase $DB
         */
        global $DB;
        $db = CIBlockPropertyEnum::GetList([
            'ID' => 'ASC',
        ], [
            'IBLOCK_ID' => $id
        ]);
        while ($row = $db->Fetch()) {
            if (!\CIBlockPropertyEnum::Delete($row['ID'])) {
                $DB->Rollback();
                throw new \Bitrix\Main\DB\Exception(GetMessage('db_delete_infoblock_property_value_error'));
            }
        }
    }

    /**
     * @param $name
     * @param $args
     * @return mixed
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function __callStatic($name, $args)
    {
        $values = [];
        self::addUFMethod($name, $args[0] ?? []);
        self::addUGMethod($name);
        $values[] = self::addIBMethod($name);
        $values[] = self::addIBPropertyMethod($name, $args[0] ?? 0, $args[1] ?? null, $args[2] ?? false, $args[3] ?? null);
        self::addEnumPVMethod($name, $args[0] ?? 0);
        self::deleteUserFieldMethod($name);
        self::deleteUserGroupMethod($name);
        self::deleteIBPropertyMethod($name, $args[0] ?? []);
        $values = array_filter($values);
        return array_shift($values);
    }

    /**
     * @return CGroup
     */
    public static function getUserGroup()
    {
        self::$userGroup = self::$userGroup ?? (new \CGroup());
        return self::$userGroup;
    }

    /**
     * @return CUserTypeEntity
     */
    public static function getUserTypeEntity()
    {
        self::$userTypeEntity = self::$userTypeEntity ?? (new \CUserTypeEntity());
        return self::$userTypeEntity;
    }
}