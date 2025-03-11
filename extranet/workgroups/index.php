<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (!\CModule::IncludeModule('intranet'))
{
	return;
}

IncludeModuleLangFile($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/extranet/public/workgroups/index.php');

$APPLICATION->SetTitle(GetMessage('EXTRANET_WORKGROUPS_PAGE_TITLE'));

use Bitrix\Intranet;
?><?php
$APPLICATION->IncludeComponent("bitrix:socialnetwork_group", "", array(
	"ITEM_DETAIL_COUNT" => "32",
	"ITEM_MAIN_COUNT" => "6",
	"DATE_TIME_FORMAT" => 'd.m.Y H:i:s', //"d.m.Y H:i:s",
	"NAME_TEMPLATE" => "",
	"PATH_TO_USER" => SITE_DIR . "contacts/personal/user/#user_id#/",
	"PATH_TO_USER_LOG" => SITE_DIR . "contacts/personal/log/",
	"PATH_TO_SUBSCRIBE" => SITE_DIR . "contacts/personal/subscribe/",
	"PATH_TO_GROUP_CREATE" => SITE_DIR . "contacts/personal/user/#user_id#/groups/create/",
	"PATH_TO_SEARCH_EXTERNAL" => SITE_DIR . "contacts/index.php",
	"PATH_TO_MESSAGES_CHAT" => SITE_DIR . "contacts/personal/messages/chat/#user_id#/",
	"PATH_TO_USER_CALENDAR" => SITE_DIR . "contacts/personal/user/#user_id#/calendar/",
	"PATH_TO_MESSAGE_FORM_MESS" => SITE_DIR . "contacts/personal/messages/form/#user_id#/#message_id#/",
	"PATH_TO_CONPANY_DEPARTMENT" => "/company/structure.php?set_filter_structure=Y&structure_UF_DEPARTMENT=#ID#",
	"PATH_TO_VIDEO_CALL" => SITE_DIR . "contacts/personal/video/#USER_ID#/",
	"PATH_TO_BIZPROC_TASK" => SITE_DIR . "contacts/personal/user/#user_id#/bizproc/#id#/",
	"PATH_TO_BIZPROC_TASK_LIST" => SITE_DIR . "contacts/personal/user/#user_id#/bizproc/",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => SITE_DIR . "workgroups/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "Y",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_TIME_LONG" => "604800",
	"PATH_TO_SMILE" => "/bitrix/images/socialnetwork/smile/",
	"PATH_TO_BLOG_SMILE" => "/bitrix/images/blog/smile/",
	"PATH_TO_FORUM_SMILE" => "/bitrix/images/forum/smile/",
	"SONET_PATH_TO_FORUM_ICON" => "/bitrix/images/forum/icon/",
	"SET_TITLE" => "Y",
	"SET_NAV_CHAIN" => "Y",
	"HIDE_OWNER_IN_TITLE" => "Y",
	"USER_PROPERTY_MAIN" => array(
		0 => "UF_1C",
	),
	"USER_PROPERTY_CONTACT" => array(
	),
	"USER_PROPERTY_PERSONAL" => array(
	),
	"AJAX_LONG_TIMEOUT" => "60",
	"BLOG_GROUP_ID" => Intranet\Integration\Wizards\Portal\Ids::getBlogId(),
	"FORUM_ID" => Intranet\Integration\Wizards\Portal\Ids::getForumId('USERS_AND_GROUPS'),
	"CALENDAR_IBLOCK_TYPE" => "events",
	"CALENDAR_GROUP_IBLOCK_ID" => Intranet\Integration\Wizards\Portal\Ids::getIblockId('calendar_groups'),
	"CALENDAR_WEEK_HOLIDAYS" => array(
		0 => "5",
		1 => "6",
	),
	"CALENDAR_YEAR_HOLIDAYS" => "1.01, 2.01, 7.01, 23.02, 8.03, 1.05, 9.05, 12.06, 4.11, 12.12",
	"CALENDAR_WORK_TIME_START" => "9",
	"CALENDAR_WORK_TIME_END" => "19",
	"CALENDAR_USER_IBLOCK_ID" => Intranet\Integration\Wizards\Portal\Ids::getIblockId('calendar_employees'),
	"CALENDAR_ALLOW_SUPERPOSE" => "Y",
	"CALENDAR_SUPERPOSE_CAL_IDS" => array(),
	"CALENDAR_SUPERPOSE_CUR_USER_CALS" => "Y",
	"CALENDAR_SUPERPOSE_USERS_CALS" => "Y",
	"CALENDAR_SUPERPOSE_GROUPS_CALS" => "Y",
	"CALENDAR_ALLOW_RES_MEETING" => "N",
	"CALENDAR_ALLOW_VIDEO_MEETING" => "N",
	"TASK_FORUM_ID" => Intranet\Integration\Wizards\Portal\Ids::getForumId('intranet_tasks'),
	"FILES_GROUP_IBLOCK_TYPE" => "library",
	"FILES_GROUP_IBLOCK_ID" => Intranet\Integration\Wizards\Portal\Ids::getIblockId('group_files'),
	"FILES_USE_AUTH" => "Y",
	"NAME_FILE_PROPERTY" => "FILE",
	"FILES_UPLOAD_MAX_FILESIZE" => "64",
	"FILES_UPLOAD_MAX_FILE" => "5",
	"FILES_USE_COMMENTS" => "Y",
	"FILES_FORUM_ID" => Intranet\Integration\Wizards\Portal\Ids::getForumId('GROUPS_AND_USERS_FILES_COMMENTS'),
	"FILES_USE_CAPTCHA" => "Y",
	"PHOTO_GROUP_IBLOCK_TYPE" => "photos",
	"PHOTO_GROUP_IBLOCK_ID" => Intranet\Integration\Wizards\Portal\Ids::getIblockId('group_photogallery'),
	"PHOTO_UPLOAD_MAX_FILESIZE" => "64",
	"PHOTO_UPLOAD_MAX_FILE" => "4",
	"PHOTO_ALBUM_PHOTO_THUMBS_SIZE" => "100",
	"PHOTO_ALBUM_PHOTO_SIZE" => "100",
	"PHOTO_THUMBS_SIZE" => "120",
	"PHOTO_PREVIEW_SIZE" => "300",
	"PHOTO_WATERMARK_MIN_PICTURE_SIZE" => "200",
	"PHOTO_PATH_TO_FONT" => "",
	"PHOTO_USE_RATING" => "N",
	"PHOTO_USE_COMMENTS" => "Y",
	"PHOTO_FORUM_ID" => Intranet\Integration\Wizards\Portal\Ids::getForumId('PHOTOGALLERY_COMMENTS'),
	"PHOTO_USE_CAPTCHA" => "Y",
	"AJAX_OPTION_ADDITIONAL" => "",
	"SEF_URL_TEMPLATES" => array(
		"index" => "index.php",
		"search" => "search.php",
		"group_subscribe" => "group/#group_id#/subscribe/",
		"group" => "group/#group_id#/",
		"group_search" => "group/search/",
		"group_search_subject" => "group/search/#subject_id#/",
		"group_edit" => "group/#group_id#/edit/",
		"group_delete" => "group/#group_id#/delete/",
		"group_request_search" => "group/#group_id#/user_search/",
		"group_request_user" => "group/#group_id#/user/#user_id#/request/",
		"user_request_group" => "group/#group_id#/user_request/",
		"group_requests" => "group/#group_id#/requests/",
		"group_requests_out" => "group/#group_id#/requests_out/",
		"group_mods" => "group/#group_id#/moderators/",
		"group_users" => "group/#group_id#/users/",
		"group_ban" => "group/#group_id#/ban/",
		"user_leave_group" => "group/#group_id#/user_leave/",
		"group_features" => "group/#group_id#/features/",
		"group_photo" => "group/#group_id#/photo/",
		"group_calendar" => "group/#group_id#/calendar/",
		"group_files" => "group/#group_id#/files/#path#",
		"group_blog" => "group/#group_id#/blog/",
		"group_blog_post_edit" => "group/#group_id#/blog/edit/#post_id#/",
		"group_blog_rss" => "group/#group_id#/blog/rss/#type#/",
		"group_blog_draft" => "group/#group_id#/blog/draft/",
		"group_blog_post" => "group/#group_id#/blog/#post_id#/",
		"group_forum" => "group/#group_id#/forum/",
		"group_forum_topic_edit" => "group/#group_id#/forum/edit/#topic_id#/",
		"group_forum_topic" => "group/#group_id#/forum/#topic_id#/",
		"group_tasks" => "group/#group_id#/tasks/",
		"group_tasks_task" => "group/#group_id#/tasks/task/#action#/#task_id#/",
		"group_tasks_view" => "group/#group_id#/tasks/view/#action#/#view_id#/",
	),
	"LOG_NEW_TEMPLATE" => "Y",
	"GROUP_USE_KEYWORDS" => "N"
	),
	false
);?>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
