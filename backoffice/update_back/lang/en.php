<?
	$text=array(
		'misc'=>array(
			'title'=>'Backoffice',
			'save'=>'Save',
			'cancel'=>'Cancel',
			'update'=>'Update',
			'add'=>'Add',
			'options'=>'Options',
			'active'=>array('m'=>'Active','f'=>'Active'),
			'inactive'=>array('m'=>'Inactive','f'=>'Inactive'),
			'active_inactive'=>array('m'=>'%s Active/Inactive','f'=>'%s Active/Inactive'),
			'edit'=>'Edit',
			'delete'=>'Delete',
			//'time'=>'Date/Hour',
			'upload_images'=>'Upload Image',
			'recommended_size'=>'Recommended Size',
			'choose_image'=>'Choose Images',
			'access_error'=>'<h3>Access error</h3><p>You tried to access to a page that doesn\'t exist or that you don\'t have permissions to access.</p>',
			'server_time'=>array(
				'server'=>'Server',
				'local'=>'Local',
				'date_time'=>'Date and Time',
			),
			'update_website'=>'Update website',
			'messages'=>array(
				'error'=>array(
					'connection'=>'Connection Error',
					'deleted'=>array(
						'image'=>'Image Deleted'
					)
				),
				'success'=>array(
					'positions'=>'Position Modified'
				)
			),
			'date_time'=>array(
				'php'=>array(
					'date'=>'d-m-Y',
					'time'=>'H:i:s'
				),
				'mysql'=>array(
					'date'=>'%d-%m-%Y',
					'time'=>'%H:%i:%s'
				)
			),
			'table'=>array(
				'id'=>'ID',
				'icon'=>'Icon',
				'name'=>'Name',
				'desc'=>'Description',
				'title'=>'Title',
				'preview'=>'Preview',
				'models'=>'No. Models',
				'store'=>'Store',
				'filter'=>'Filter',
				'visible'=>'Visible',
				'columns'=>'Columns',
				'date'=>array(
					'start'=>'Start Date',
					'end'=>'End Date',
					'publish'=>'Publication Date'
				),
				'options'=>array(
					'title'=>'Options',
					'delete'=>'Delete',
					'edit'=>'Edit',
					'edit_model'=>'Models',
					'private' => 'Private'
				)
			),
			'chars'=>array(
				'required'=>'Required, Allowed characters',
				'required_accents'=>'Required, Allowed characters (accents included)',
				'allowed'=>'Allowed characters',
				'allowed_accents'=>'Allowed characters (accents included)',
				'youtube'=>'E.g.: &nbsp; http://www.youtube.com/watch?v=MmAMTmO18Bw &nbsp; http://youtu.be/MmAMTmO18Bw &nbsp; youtu.be/MmAMTmO18Bw &nbsp; MmAMTmO18Bw',
				'ga'=>'UA-xxxxxxx-y (x represents a number and y a number higher than 1)'
			),
			'fields'=>array(
				'active'=>'Active',
				'soldout'=>'Sold Out',
				'title'=>'Title',
				'desc'=>'Description',
				'external_link'=>'External Link',
				'content'=>'Content',
				'name'=>'Name',
				'youtube'=>array(
					'title'=>'URL or movie ID from Youtube',
					'desc'=>'ATENTION: Slideshow will be replaced if this field is filled.',
					'placeholder'=>'http://www.youtube.com/watch?v=&lt;id_video&gt;',
					'help'=>'E.g.: &nbsp; http://www.youtube.com/watch?v=MmAMTmO18Bw &nbsp; http://youtu.be/MmAMTmO18Bw &nbsp; youtu.be/MmAMTmO18Bw &nbsp; MmAMTmO18Bw'
				),
				'date'=>array(
					'start'=>'Start Date',
					'end'=>'End Date',
					'publish'=>'Publication Date'
				),
				'category'=>array(
					'label'=>'Product\'s category',
					'placeholder'=>'Select a category',
					'none'=>'No category'
				),
				'vat'=>array(
					'label'=>'Product\'s VAT',
					'placeholder'=>'Select the VAT'
				),
				'color'=>array(
					'label'=>'Colors'
				),
				'sub_group'=>array(
					'label'=>'Sub-page',
					'small'=>'Defines the sub-page where it will show'
				),
				'private'=>array(
					'label'=>'Private',
					'small'=>'Defines if it is required to login to see this content'
				)
			),
			'js'=>array(
				'messages'=>array(
					'error'=>array(
						'connection'=>'Connection Error',
						'name'=>'Wrong Name',
						'desc'=>'Wrong Description',
						'deleted_image'=>'Image not found',
						'youtube_video'=>'Video not found',
						'wrong_password'=>'Wrong Password',
						'member_non-existing'=>'Member Doesn\'t Exist',
						'crm_contact'=>array(
							'inserted'=>'Error while inserting'
						)
					),
					'success'=>array(
						'name_saved'=>'Name Saved',
						'desc_saved'=>'Description Saved',
						'icon_saved'=>'Icon Modified Successfully',
						'pos_saved'=>'Position Modified Successfully',
						'high_saved'=>'Highlight Modified Successfully',
						'settings_saved'=>'Settings Modified Successfully',
						'data_saved'=>'Data Modified',
						'value_saved'=>'Value Modified',
						'color_saved'=>'Color Modified',
						'upload_complete'=>'Upload Complete',
						//========================================
						'page_active'=>'Page active',
						'page_inactive'=>'Page inactive',
						'store_active'=>'Store active',
						'store_inactive'=>'Store inactive',
						'filter_active'=>'Filter active',
						'filter_inactive'=>'Filter inactive',
						'columns_changed'=>'Columns saved',
						//========================================
						'crm_contact'=>array(
							'edited'=>'Contact modified successfully',
							'inserted'=>'Contact inserted successfully',
							'deleted'=>'Contact deleted'
						),
						'crm_categories'=>array(
							'active'=>'Category Active',
							'inactive'=>'Category Inactive',
							'delete'=>'Category Deleted Successfully',
							'edited'=>'Category Edited Successfully',
							'inserted'=>array(
								'success'=>'Category Inserted Successfully',
								'error'=>'Error Inserting Category '
							)
						),
						//========================================
						'activity'=>array(
							'saved'=>'Activity Saved',
							'active'=>'Activity Active',
							'inactive'=>'Activity Inactive',
							'delete'=>'Activity deleted'
						),
						'image'=>array(
							'active'=>'Image Active',
							'inactive'=>'Image Inactive',
							'delete'=>'Image Deleted Successfully',
							'edited'=>'Image Edited Successfully'
						),
						'team'=>array(
							'active'=>'Member Active',
							'inactive'=>'Member Inactive',
							'delete'=>'Member Deleted Successfully',
							'edited'=>'Member Edited Successfully'
						),
						'portfolio'=>array(
							'active'=>'%s Active',
							'inactive'=>'%s Inactive',
							'delete'=>'%s Deleted Successfully',
							'edited'=>'%s Edited Successfully'
						),
						'news'=>array(
							'active'=>'%s Active',
							'inactive'=>'%s Inactive',
							'delete'=>'%s Deleted Successfully',
							'edited'=>'%s Edited Successfully'
						),
						'highlight'=>array(
							'active'=>'Highlight Active',
							'inactive'=>'Highlight Inactive',
							'delete'=>'Highlight Deleted Successfully',
							'edited'=>'Highlight Edited Successfully',
							'inserted'=>'Highlight Inserted Successfully'
						),
						'administrators'=>array(
							'delete'=>'Administrator deleted',
							'insert'=>'Administrator added'
						),
						//========================================
						'ext_private_changed' => 'Private changed'
					)
				),
				'dialogs'=>array(
					'delete'=>array(
						'title'=>'Confirmation',
						'msg'=>'Are you sure you want to Delete?',
						'buttons'=>array(
							'yes'=>'Yes',
							'no'=>'No'
						),
						'loading'=>'Deleting'
					),
					'activity'=>array(
						'cancel_add'=>array(
							'title'=>'Cancel Add',
							'msg'=>'You made modifications to this Activity and did not save.<br>Are you sure you want to Cancel these changes?',
							'buttons'=>array(
								'yes'=>'Yes',
								'no'=>'No'
							)
						),
						'save'=>array(
							'title'=>'Confirmation',
							'msg'=>'Do you want to activate this activity<br>If you activate, it will be published in the website?',
							'buttons'=>array(
								'yes'=>'Yes',
								'no'=>'No'
							)
						),
						'delete'=>array(
							'title'=>'Confirmation',
							'msg'=>'Are you sure you want to delete ',
							'buttons'=>array(
								'yes'=>'Yes',
								'no'=>'No'
							),
							'loading'=>'Deleting'
						)
					),
					'team'=>array(
						'new'=>array(
							'title'=>'New item',
							'msg'=>'This item was created recently<br/>Do you wish to Activate this item?',
							'buttons'=>array(
								'yes'=>'Yes',
								'no'=>'No'
							)
						)
					),
					'portfolio'=>array(
						'new'=>array(
							'title'=>'New item',
							'msg'=>'This item was created recently<br/>Do you wish to Activate this item?',
							'buttons'=>array(
								'yes'=>'Yes',
								'no'=>'No'
							)
						)
					),
					'news'=>array(
						'new'=>array(
							'title'=>'New %s',
							'msg'=>'This %s was created recently<br/>Do you wish to Activate this item?',
							'buttons'=>array(
								'yes'=>'Yes',
								'no'=>'No'
							)
						)
					),
					'highlights'=>array(
						'new'=>array(
							'title'=>'New Highlight',
							'msg'=>'This highlight was created recently<br>Do you wish to activate this item?',
							'buttons'=>array(
								'yes'=>'Yes',
								'no'=>'No'
							)
						)
					),
					'slideshow'=>array(
						'new'=>array(
							'title'=>'New Image',
							'msg'=>'This image was created recently<br>Do you wish to activate this item?',
							'buttons'=>array(
								'yes'=>'Yes',
								'no'=>'No'
							)
						)
					)
				),
				'uploadify'=>array(
					'success'=>'Image Uploaded',
					'error'=>'Error while uploading',
					'files'=>'All Images (*.jpg, *.jpeg, *.gif, *.png)|JPEG Images (*.jpg, *.jpeg)|GIF Images (*.gif)|PNG Images (*.png)|All files (*.*)'
				),
				'jcrop'=>array(//
					'title'=>'Upload Image',
					'loading'=>'Loading',
					'resizing'=>'Resizing',
					'error'=>array(
						'invalid'=>'Invalid Image',
						'reading'=>'Error on reading'
					),
					'buttons'=>array(
						'upload'=>'Uploading',
						'rotate'=>'Rotate',
						'cancel'=>'Cancel'
					)
				)
			)
		),
		'header'=>array(
			'changelog'=>array(
				'version'=>'Version',
				'updated'=>'Updated on',
				'title'=>'New Features',
				'desc'=>'Know the Latest Features'
			),
			'wellcome'=>'Welcome',
			'account'=>'Account Settings',
			'logout'=>'Logout'
		),
		'menu'=>array(
			'pages'=>'Edit Pages',
			'reviews_list'=>'Reviews',
			'settings'=>'Definitions',
			'admin'=>array(
				'title'=>'WWD Area',
				'list'=>'List Administrators',
				'add'=>'Add Administrator'
			),
			'home'=>array(
				'slideshow'=>'Slideshow',
				'highlights'=>'Highlights',
				'highlights_settings'=>'Highlights Settings',
				'slideshow_settings'=>'Slideshow Settings'
			),
			'about'=>array(
				'content'=>'Content',
				'highlights'=>'Highlights',
				'settings'=>'Settings'
			),
			'news'=>array(
				'categories'=>'Categories'
			),
			'crm'=>array(
				'title'=>'CRM',
				'contacts'=>'Contacts',
				'categories'=>'Categories'
			)
		),
		'pages_list'=>array(//?p=pages_list
			'store_enabled'=>'Store Enabled',
			'tooltips'=>array(
				'store'=>'Store Active/Inactive',
				'filter'=>'Filter Active/Inactive'
			)
		),
		'home'=>array(
			'slideshow'=>array(//?p=slideshow
				'list'=>array(
					'title'=>'Slideshow',
					'header'=>'Slideshow images',
					'image'=>'Image',
					'active'=>'Image active',
					'inactive'=>'Image inactive',
					'active_inactive'=>'Image active/inactive'
				),
				'edit'=>array(//?p=alterar_slide&id_slide=<n>
					'details'=>array(
						'title'=>'Image Title',
						'header'=>'Image Description'
					),
					'image'=>array(
						'header'=>'Slideshow Image'
					),
					'lightbox'=>array(
						'title'=>'Link to '.current(mysql_fetch_assoc(mysql_query('select name from pages where `group`=4 and lang=(select id from lang where name="en")'))).' or '.current(mysql_fetch_assoc(mysql_query('select name from pages where `group`=5 and lang=(select id from lang where name="en")'))),
						'desc'=>'Allows the client to click on the item and see the details',
						'none'=>'None'
					)
				)
			),
			'slideshow_settings'=>array(//?p=definicoes_slideshow
				'title'=>'Definitions',
				'title_header'=>'Presentation Settings'
			),
			'highlights'=>array(//?p=destaques
				'list'=>array(//?p=destaques
					'header'=>'Highlight list',
					'insert'=>'Add Highlight'
				),
				'edit'=>array(//?p=alterar_destaque&id_destaque=<n>
					'title'=>'Edit Highlight - no. %d',
					'details'=>array(
						'header_title'=>'Highlight Details',
						'active'=>'Active',
						'icon'=>'Icon',
						'title'=>'Title'
					),
					'content'=>array(
						'header_title'=>'Highlight Content',
					)
				),
				'insert'=>array(//?p=inserir_destaque
					'title'=>'Add Highlight',
					'add'=>'Add Highlight',
					'header'=>array(
						'details'=>'Highlight Details',
						'content'=>'Highlight Content'
					)
				)
			),
			'highlights_settings'=>array(//?p=definicao_destaque_inicio
				'title'=>'Published/Unpublished Highlight',
				'active'=>'Published Highlight',
				'hide_icons'=>'Hide icons'
			)
		),
		'about'=>array(
			'content'=>array(//?p=about_conteudo
				'header'=>array(
					'title'=>'Content of the page %s',
					'left'=>'Left text box',
					'right'=>'Right text box'
				),
				'title'=>'Title',
				'content'=>'Content'
			),
			'activities'=>array(//?p=about_actividades
				'title'=>'Activities List',
				'%'=>'Percentage',
				'color'=>'Activity Color',
				'active'=>'Activity active/inactive',
				'name'=>'Name',
				'cancel_add'=>'Cancel adding'
			),
			'highlights'=>array(//?p=about_destaques
				'header'=>array(
					'title'=>'Highlights of the page %s'
				),
				'title'=>'Highlight Title'
			),
			'settings'=>array(//?p=definicoes_actividade
				'header'=>array(
					'title'=>'Activities Settings'
				),
				'title'=>'Settings',
				'activity'=>'Activity',
				'diagram'=>'Publish Diagram',
				'highlights'=>'Publish Highlights'
			)
		),
		'team'=>array(
			'list'=>array(//?p=team
				'header'=>array(
					'add_from_image'=>'Add item from Image',
					'elements'=>'Items of %s'
				),
				'columns'=>array(
					'photo'=>'Photo',
					'name'=>'Name',
					'position'=>'Position'
				)
			),
			'edit'=>array(//?p=team_edit&id=<n>
				'title'=>'Edit %s item - No. %d',
				'header'=>array(
					'details_contact'=>'Details and Contacts',
					'details_publish'=>'More information',
					'image'=>'Image'
				),
				'position'=>'Position'
			)
		),
		'portfolio'=>array(
			'list'=>array(//?p=portfolio
				'headers'=>array(
					'add_from_image'=>'Add item on %s',
					'list'=>'Items of %s'
				),
				'active_inactive'=>'%s active/inactive'
			),
			'edit'=>array(//?p=alterar_portfolio&id_portfolio=<n>
				'header'=>array(
					'details_publish'=>'Publication Details',
					'details_content'=>'Content ',
					'image'=>'Images'
				),
				'title'=>'Edit %s - No. %d'
			),
			'no_date'=>array(
				'table_start_date'=>'No date',
				'table_end_date'=>'Never',
				'field_end_date'=>'Never',
			)
		),
		'news'=>array(
			'list'=>array(//?p=news_list
				'header'=>array(
					'add_from_image'=>'Add %s from Image',
					'list'=>'%s List'
				),
				'colors' => array(
					'title' => 'Edit %s colors',
					'product_colors' => '%s colors',
					'not_product_colors' => 'Remaining Colors',
					'saved' => 'Colors saved',
					'table' => array(
						'options' => array(
							'colors' => 'Colors'
						)
					)
				)
			),
			'edit'=>array(//?p=news_edit&id=<n>
				'title'=>'Edit %s - No. %d',
				'header'=>array(
					'details_publish'=>'Publication Details',
					'content_preview'=>'Content',
					'content_lightbox'=>'Lightbox Content',
					'descriptive_column'=>'%s Column',
					'images'=>'%s Images',
					'docs'=>'Documents',
					'columns'=>array(
						'1st'=>'1st Descriptive Column',
						'2nd'=>'2nd Descriptive Column',
						'3rd'=>'3rd Descriptive Column'
					)
				),
				'images'=>array(
					'warning'=>'ATTENTION: the main image can not be deleted. You can, however, switch the images position using drag and drop.',
					'empty'=>'No images available'
				),
				'docs'=>array(
					'view_file'=>'View File',
					'choose'=>'Choose Document',
					'upload'=>'Upload Doc.',
					'messages'=>array(
						'deleted'=>'File deleted',
						'title'=>'Title changed',
						'upload'=>'Doc. Uploaded Successfuly'
					),
					'language'=>'Language'
				),
				'fields'=>array(
					'category'=>'Category'
				)
			),
			'categories'=>array(
				'title'=>'General Product Information',
				'cats'=>array(
					'title'=>'Categories',
					'delete'=>array(
						'title'=>'Delete category',
						'message'=>'Are you sure you want to delete this category?',
						'buttons'=>array(
							'yes'=>'Yes',
							'no'=>'No'
						),
						'deleted'=>'Category Deleted'
					),
					'edit'=>array(
						'desc'=>'Description Saved',
						'active'=>'Activation Saved'
					),
					'insert'=>array(
						'title'=>'Insert category',
						'success'=>'Category inserted',
						'error'=>'Error while inserting'
					)
				),
				'fields'=>array(
					'category'=>array(
						'label'=>'Product category',
						'placeholder'=>'Choose a category'
					),
					'vat'=>array(
						'label'=>'Product VAT',
						'placeholder'=>'Choose a VAT value'
					),
					'ref'=>array(
						'label'=>'Reference'
					),
					'price'=>array(
						'label'=>'Price of the model, without VAT'
					)
				),
				'table'=>array(
					'n_news'=>'No. News'
				)
			)
		),
		'contacts'=>array(//?p=contactos
			'header'=>'Contact Details',
			'field'=>array(
				'location'=>array(
					'title'=>'Location',
					'street_number'=>array(
						'title'=>'Street/Number'
					),
					'city_contry'=>array(
						'title'=>'City/Country'
					),
					'google_maps'=>array(
						'title'=>'Google Maps Connection',
						'help'=>'DO NOT use the "Short URL"'
					)
				),
				'contact'=>array(
					'title'=>'Contact Details',
					'phone'=>array(
						'title'=>'Phone Number'
					),
					'fax'=>array(
						'title'=>'Fax Number'
					),
					'cellphone'=>array(
						'title'=>'Mobile Number'
					),
					'skype'=>array(
						'title'=>'Skype username'
					)
				),
				'social'=>array(
					'title'=>'Social Networks and Email',
					'email'=>array(
						'title'=>'Contact Email',
						'help'=>'We will use this Email on the frontend from'
					)
				)
			)
		),
		'crm_contacts'=>array(
			'list'=>array(//?p=crm_contacts
				'header'=>array(
					'title'=>'Contact list'
				),
				'name'=>'Name',
				'mail'=>'Email',
				'date'=>'Date',
				'birth_date'=>'Birth Date',
				'city'=>'City',
				'country'=>'Country',
				'phone'=>'Phone number',
				'full_time'=>'Full Time/Part Time',
				'file'=>'File',
				'lang'=>'Language',
				'ip'=>'IP',
				'obs'=>'Observations',
				'message'=>'Message',
				'categories'=>'Categories',
				'lang'=>'Language',
				'source'=>array(
					'title'=>'Source',
					'sources'=>array(
						'crm'=>'CRM',
						'back'=>'Backoffice',
						'recruit'=>'Recruitment',
						'contact'=>'Contact',
						'demo'=>'Demo',
						'ext_store'=>'Online store',
						'ext_newsletter'=>'Newsletter',
						'review'=>'Reviews',
						'subscribe'=>'Form: '.current(mysql_fetch_row(mysql_query('select form_subscribe_text from site where lang=(select id from lang where name="en")')))
					)
				),
				'table'=>array(
					'options'=>array(
						'file'=>'File received though the website'
					)
				),
				'newsletter'=>array(
					'active'=>'Newsletter active',
					'inactive'=>'Newsletter inactive',
					'tooltip'=>'Newsletter Active/Inactive'
				),
				'add'=>'Add contact'
			),
			'edit'=>array(
				'title'=>'Edit contact - No. %d',
				'fields'=>array(
					'birth_date'=>'Birth date',
					'email'=>'Email',
					'phone'=>'Phone',
					'schedule'=>array(
						'title'=>'Schedule',
						'options'=>array('Part-time','Full-time')
					),
					'id_countries'=>'Country',
					'city'=>'City',
					'id_categories'=>'Categories',
					'obs'=>'Observations',
					'message'=>'Message',
					'file'=>'File'
				),
				'lang'=>'Language',
				'notes'=>'We advise extreme caution when opening the following file.<br>Since it was an external upload, we can\'t control it in any way.'
			),
			'insert'=>array(
				'title'=>'Insert contact'
			)
		),
		'crm_cats'=>array(
			'list'=>array(//?p=crm_cats
				'header'=>array(
					'title'=>'List of categories',
					'insert'=>'Insert new categories'
				),
				'name'=>'Name',
				'active'=>'Active / Inactive',
				'options'=>array(
					'contacts'=>'Contacts in the category'
				)
			)
		),
		'reviews_list'=>array(//?p=reviews_list
			'title'=>'Review list',
			'to_review'=>'not edited',
			'table'=>array(
				'country'=>'Country',
				'email'=>'Email',
				'phone'=>'Phone',
				'date'=>'Date',
				'rating'=>'Rating'
			)
		),
		'reviews_edit'=>array(//?p=reviews_edit
			'title'=>'Edit Review no. %d',
			'headers'=>array(
				'details'=>'Review Details',
				'content'=>'Review Content'
			),
			'fields'=>array(
				'published'=>'Published',
				'country'=>'Country',
				'email'=>'Email',
				'phone'=>'Phone',
				'date'=>'Date',
				'original'=>'Original Content',
				'content'=>'Content'
			)
		),
		'site'=>array(//?p=site
			'title'=>'General Website Definitions',
			'header'=>array(
				'settings'=>'Website Definitions',
				'publish'=>'Publication Definitions',
				'seo'=>'Search Engine Optimization',
				'colors'=>'Colors Definitions',
				'style'=>'Website Theme',
				'general'=>'General definitions',
				'recruit'=>'Recruitment definitions',
				'recruit_lang'=>'Texts in ',
				'news_categories' => 'News\' Categories Definitions'
			),
			'fields'=>array(
				'name'=>'Website Name',
				'lang'=>'Active Language',
				'maintenance'=>'In Maintenance',
				'desc'=>'Website Description',
				'keywords'=>'Website Keywords',
				'logo'=>'Website Logo',
				'background'=>array('odd'=>'Background Colors (odd pages)','even'=>'Background Colors (even pages)'),
				'gradient'=>'Gradient Type',
				'favicon'=>'Website Favicon',
				'logo_back'=>'Backoffice Logo',
				'divisor'=>'Divider',
				'choose_color'=>'Pick a Color',
				'high_style'=>'Activate higher website bar',
				'title'=>'Title',
				'desc'=>'Description',
				'recruit_active'=>'Recruitment active',
				'c1s_logo_footer'=>'C1S logo on footer',
				'captcha_contact_form'=>'Captcha on contact form',
				'ga'=>'ID Google Analytics',
				'image_resolutions'=>'Image Resolutions',
				'image_resolutions_edit'=>'Edit Resolutions',
				'css_fix'=>'CSS fix file',
				'css_fix_edit'=>'Edit CSS fix file',
				'subscribe_form'=>'Subscribe form active',
				'subscribe_captcha'=>'Active captcha on the subscribe form',
				'subscribe_button'=>'Button name',
				'subscribe_template'=>'Subscribe template',
				'subscribe_template_edit'=>'Edit settings',
				'subscribe_template_title'=>'Edit template settings',
				'subscribe_template_saved'=>'Template settings saved',
				'language_active'=>'Language active',
				'reviews'=>'Show review\'s form',
				'cookie_warning'=>'Show warning about the "cookies"',
				'privacy_policy'=>'Show privacy policy',
				'show_news_categories'=>'Show category names on news\' names',
				'show_news_categories_list'=>'Show categories instead of news',
				'show_news_categories_images'=>'Show image on categories',
				'show_consumer_complaints_resolution'=>'Show information about dispute resolution',
				'show_complaints_book'=>'Show information about the complaints\'s book',
				'layout' => 'Website Layout',
				'layout_edit' => 'Edit Layout',
				'lang_manage' => 'Website Languages',
				'lang_manage_edit' => 'Edit Languages'
			),
			'size'=>'Photo Size',
			'start_bg_color'=>'Inicial background color',
			'end_bg_color'=>'Final background color'
		),
		'site_image_resolution'=>array(//?p=site_image_resolution
			'title'=>'Change image resolutions',
			'full'=>'Full',
			'thumb'=>'Thumb',
			'help'=>'Width &times; Height',
			'pages'=>array(
				'news'=>current(mysql_fetch_assoc(mysql_query('select title from pages where lang=(select id from lang where name="en") and `group`=5'))),
				'portfolio'=>current(mysql_fetch_assoc(mysql_query('select title from pages where lang=(select id from lang where name="en") and `group`=4'))),
				'slideshow'=>'Slideshow',
				'team'=>current(mysql_fetch_assoc(mysql_query('select title from pages where lang=(select id from lang where name="en") and `group`=3')))
			),
			'js'=>array(
				'success'=>'Size changed',
				'too_large'=>'Resolution is too large'
			)
		),
		'user'=>array(//?p=user
			'header'=>array(
				'details'=>'User details',
				'password'=>'Change password'
			),
			'fields'=>array(
				'level'=>array(
					'label'=>'Access level',
					'small'=>'Permisson level being applied',
					'level'=>'Level'
				),
				'lang'=>array(
					'label'=>'Backoffice language',
					'small'=>'Language used on the item on the backoffice'
				),
				'name'=>array(
					'label'=>'Full name',
					'small'=>''
				),
				'email'=>array(
					'label'=>'Email',
					'small'=>'Email of the user (must not be in use by other users)'
				),
				'current_password'=>array(
					'label'=>'Current password',
					'small'=>'Current password being used'
				),
				'new_password'=>array(
					'label'=>'New password',
					'small'=>''
				),
				'new_password_confirm'=>array(
					'label'=>'Confirm new password',
					'small'=>''
				)
			)
		),
		'administrators'=>array(//?p=administrators
			'header'=>array(
				'list'=>'List of administrators'
			),
			'table'=>array(
				'username'=>'Username',
				'email'=>'Email',
				'level'=>'Level',
				'last_login'=>'Last login',
				'n_logins'=>'No. logins'
			)
		),
		'administrator_edit'=>array(//?p=administrator_edit
			'header'=>array(
				'details'=>'Administrator details',
				'password'=>'Change password'
			),
			'fields'=>array(
				'active'=>array(
					'label'=>'Administrator active',
					'small'=>''
				),
				'level'=>array(
					'label'=>'Access level',
					'small'=>'Permisson level being applied'
				),
				'lang'=>array(
					'label'=>'Backoffice language',
					'small'=>'Language used on the item on the backoffice'
				),
				'username'=>array(
					'label'=>'Username',
					'small'=>'Username used to access the backoffice'
				),
				'name'=>array(
					'label'=>'Full name',
					'small'=>''
				),
				'email'=>array(
					'label'=>'Email',
					'small'=>'Email of the user (must not be in use by other users)'
				),
				'current_password'=>array(
					'label'=>'Current password',
					'small'=>'Current password being used'
				),
				'new_password'=>array(
					'label'=>'New password',
					'small'=>''
				),
				'new_password_confirm'=>array(
					'label'=>'Confirm new password',
					'small'=>''
				)
			)
		),
		'privacy_policy' => array(
			'title' => 'Edita Privacy Policy',
			'desc' => 'Privacy Policy in %s',
			'lang' => array(
				'pt' => 'Portuguese',
				'en' => 'English',
				'fr' => 'French'
			)
		),
	);
	
	$lista_niveis_acesso = '<p>
					* Access Levels:
					<br>1- Can check but can not change.
					<br>2- Can check, order, add, delete, edit ou publish/unpublish.
					<br>3- All the permissions of level 2 but can edit website definitions.
					<br>4- All the permissions of level 3 but also can control Administrators and Advanced Website Definitions.
					'.(($_SESSION['adm_lvl']==5)?'<br>5- Has total control of the Website, Administrators and Website Definitions.':'').'
				</p>';
?>