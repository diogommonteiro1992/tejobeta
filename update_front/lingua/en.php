<?
return $text = array(
	'manutencao'=>array(
		'em_manutencao' => 'The website is under maintenance. Thank you for your visit.',
		'messages'=>array(
			'contact_form'=>array(
				'success'=>'Contact inserted',
				'error_email'=>'Invalid Email'
			)
		)
	),
	'manutencao_login'=>array(
		"h2" => "Página em Manutenção - Autenticação",
		"em_manutencao" => "O website que está a tentar visualizar encontra-se em manutenção. caso queira algumas informações contacte o administrador. geral@worldwidedesign.pt",
		"seremos_breves" => "Desculpe o incómodo, prometemos ser breves."
	),//textos da caixa de manutençao
	'misc'=>array(//outros campos comuns a todos
		'locale_mysql'=>'en_US',
		'locale_google_maps'=>'en',
		'locale'=>'en',
		'company'=>'Company',
		'email'=>'E-mail',
		'ok'=>'OK',
		'back'=>'Back',
		'banner_cookies'=>array(
			'text'=>'This website uses cookies to assist on your navigation and operation. Some cookies that we use are required for the execution of the Software and associated services. The storage of cookies is subject to your acceptance and can be deleted at any moment using tools available on your browser.',
			'accept'=>'Accept',
			'refuse'=>'Refuse',
			'link'=>'More Informations'
		),
		'ext' => array(
			'data' => array(
				'consentment' => 'I consent to the processing of data according to the <a href="/terms.html?lightbox[height]=60p&amp;lightbox[width]=50p&amp;page=gdpr" class="lightbox" rel="nofollow">GDPR</a>' 
			),
			'store' => array(
				'vat' => 'VAT',
				'vat_exempt_art_53' => 'The prices shown do not include VAT under Article 53 of the CIVA',
				'vat_shown' => 'The prices shown include VAT at the current legal rate',
				'vat_not_shown' => 'To the prices shown is incremented the VAT at the current legal rate'
			)
		),
		'fields'=>array(
			'country'=>array(
				'desc'=>'Country',
				'placeholder'=>'Choose a country'
			)
		)
	),
	'contact'=>array(//parte de contacto
		//texto da secçao 'find-us'
		'find_us'=>'Find us Here',
		'phone'=>'Phone',
		'cellphone'=>'Cellphone',
		'fax'=>'Fax',
		'tweets'=>'Recent Tweets',
		//seccao de envio de email
		'name'=>'Name',
		'subject'=>'Subject',
		'message'=>'Message',
		'send'=>'Send',
		'other'=>'Other contacts',
		'obs'=>'Message',
		'lang'=>'Language',
		'captcha'=>'Please answer our anti-spam question',
		//layout: dates
		'start_date'=>'Pickup date',
		'end_date'=>'Dropoff date',
		//layout: booking
		'pickup'=>'Pickup',
		'adults'=>'No. adults',
		'children'=>'No. children &lt; 2yo.',
		'dropoff'=>'Dropoff',
		'pickup_date'=>'Pickup date',
		'flight'=>'Flight no.',
		//layout: <<end>>
		'box'=>array(
			'header'=>array(
				'error'=>'AN ERROR HAS OCCURED',
				'success'=>'EMAIL SENT SUCCESSFULLY'
			),
			'failure'=>'Unable to send your mail',
			'invalid'=>'Enter a Valid E-mail Address',
			'not_checked'=>'It is mandatory to accept the Privacy Policy',
			'empty'=>'Please fill out all the fields',
			'success'=>'Your email has been successfully sent.<br>We will contact you as soon as possible!',
			'wrong_captcha'=>'The answer of the captcha is incorrect',
			'refresh'=>'Refresh the page and try again',
			'spam'=>array(
				'link'=>array(
					'desc'=>array(
						'top'=>'A link or an email address was detected on the ',
						'bottom'=>' and was not possible to send your message.'
					),
					'name'=>'name',
					'subject'=>'subject',
					'message'=>'message'
				),
				'ip'=>'The maximum number of emails sent was reached.'
			),
			'ext' => array(
				'data' => array(
					'consentment' => 'Consentment required'
				)
			)
		),
		'map' => array(
			'touch' => 'Use two fingers to move the map',
			'scroll' => 'Use ctrl + scroll to zoom the map',
			'scrollMac' => 'Use \\u2318 + scroll to zoom the map'
		)
	),
	'review'=>array(//review part
		'title'=>'Reviews',
		'button'=>'Send Review',
		'desc'=>'Fill the following fields to continue',
		'fields'=>array(
			'country'=>array(
				'desc'=>'Country',
				'placeholder'=>'Choose a country'
			),
			'first_name'=>'Name',
			'last_name'=>'Surname',
			'classification'=>'Rating',
			'obs'=>'Review'
		),
		'email'=>array(
			'personal'=>array(
				'subject'=>'%s: Review',
				'title'=>'You have received a new review with the following details: '
			),
			'client'=>array(
				'subject'=>'%s: Review',
				'title'=>'Your review has been sent with the following details:'
			),
			'fields'=>array(
				'first_name'=>'Name',
				'last_name'=>'Surname',
				'email'=>'Email',
				'lang'=>'Language',
				'phone'=>'Phone',
				'obs'=>'Review'
			)//
		)
	),
	'subscribe'=>array(
		'title'=>'Information request',
		'fields'=>'Fill the fields with the required informations',
		'ob_fields'=>'Required fields',
		'error'=>array(
			'title'=>'Error while sending request',
			'desc'=>'An error has occurred while sending your request.',
			'p'=>'Please, try again later or <a href="#contact">contact us</a>.',
			'back'=>'Back'
		),
		'error_sent'=>array(
			'title'=>'Information sent successfully',
			'desc'=>'Your request was sent successfully to us, however, we could not send a confirmation to you.',
			'back'=>false
		),
		'error_limit'=>array(
			'title'=>'Error while sending request',
			'desc'=>'It was not possible to send the request',
			'p'=>'You have reached the limit of messages.<br>You can try again later to send more',
			'back'=>false
		),
		'error_captcha'=>array(
			'title'=>'Error while sending request',
			'desc'=>'It was not possible to send the request.',
			'p'=>'The answer of the captcha was incorrect.<br>You can go back and try again.',
			'back'=>'Back'
		),
		'error_link'=>array(
			'title'=>'Error while sending request',
			'desc'=>'It was not possible to send the request.',
			'p'=>'It was found a link on the %s field.<br>Please, go back and try again.',
			'back'=>'Back',
			'fields'=>array(
				'name'=>'name',
				'phone'=>'phone',
				'obs'=>'observations'
			)
		),
		'success'=>array(
			'title'=>'Information sent successfully',
			'desc'=>'Your request was sent successfully.<br>A confirmation was sent to your email.',
			'p'=>'If you have any doubt, don\\\'t hesitate in <a href="#contact">contacting</a> us.',
			'back'=>false
		)
	),
	'portfolio'=>array(
	),
	'about'=>array(
		'activities'=>'Activities',
		'recruit'=>array(//recruit part
			'title'=>'Recruitment',
			'desc'=>'Fill the following fields to continue',
			'cv'=>'Resume',
			'messages'=>array(
				'error'=>'Error while uploading',
				'invalid'=>'File type invalid',
				'success'=>'Recruitment received successfully'
			),
			'fields'=>array(
				'birth_date'=>'Birth Date',
				'country'=>array(
					'desc'=>'Country',
					'placeholder'=>'Choose a country'
				),
				'full_time'=>array(
					'title'=>'Schedule',
					'placeholder'=>'Choose a schedule',
					'options'=>array('Part-time','Full-time')
				),
				'full_name'=>'Full name',
				'city'=>'City'
			),
			'email'=>array(
				'personal'=>array(
					'subject'=>'%s: Recruitment',
					'title'=>'You have received a new recruitment message with the following details: ',
					'file'=>'Press to open the '
				),
				'client'=>array(
					'subject'=>'%s: Recruitment',
					'title'=>'Your recruitment message has been sent with the following details:'
				),
				'fields'=>array(
					'full_name'=>'Full name',
					'birth_date'=>'Birth date',
					'city'=>'City',
					'email'=>'Email',
					'lang'=>'Language',
					'phone'=>'Phone',
					'obs'=>'Observations',
					'open'=>'Curriculum Vitae'
				)//
			)
		)
	),
	'news'=>array(
		'read_more'=>'Open Link',
		'date'=>array(
			'mysql'=>'%b %d, %Y',//este valor esta a ser aproveitado para a data do email do recrutamento
			'php'=>'M d, Y'
		),
		'store'=>array(
			'search'=>'Search',
			'all'=>'All'
		),
		'sold_out' => 'Out of stock',
		'search' => array(
			'search' => 'Search',
			'pages' => 'Pages',
			'categories' => 'Categories',
			'all' => 'All'
		)
	),
	'recruit'=>array(
		'sent'=>'Recruitment sent successfully',
		'error_network'=>'Connection Error',
		'error_file_rejected'=>'File rejected',
		'error_limit'=>'Message limit reached'
	),
	'js'=>array(
		'twitter_loading'=>'Searching Twittes...',
		'nav_go_to'=>'Go To...',
		'date'=>'dd-mm-yy'
	),
	'header' => array(
		'search' => 'Search'
	),
	'footer'=>array(
		'c1s'=>array(
			'title'=>'Created with Create1Site',
			'url'=>'http://criar1site.pt/en'
		),
		'terms_and_conditions' => 'Terms and conditions',
		'gdpr' => 'GDPR'
	),
	'404' => array(
		'title' => 'Page not found',
		'desc' => 'The page you\'re trying to view couldn\'t be found.',
		'p' => 'You could try to:',
		'list' => array(
			'back' => 'Return to the previous page',
			'home' => 'Go to the %s page',
			'contact' => 'Contact us, indicating the page you\'ve visited'
		)
	),
	'email' => (
		$email=array(
			'confirm'=>array(
				'subject'=>'%s: Contact Message',
				'body'=>'
		<p>Thank you for contacting us.</p>
		<p>We will reply as soon as possible.</p>
		<p>Here is a copy of your message:</p>
		<i>%s</i>
		',
				'footer'=>''
			),
			'message'=>array(
				'subject'=>'%s: Contact',
				'body'=>'
		<h2><font size="4" face="sans-serif">You have received a new contact message with the following details:</font></h2>
		Name: %s<br/>
		Email: %s<br/>
		Subject: %s<br/>
		Language: %s<br/>
		Message:<br/>
		%s
		',
				'footer'=>''
			),
			'maintenance_form'=>array(
				'confirm'=>array(
					'subject'=>'%s: Contact inserted',
					'body'=>'
						<p>
							Your contact was inserted successfully.<br>
							Below, you can find a copy of the informations you\'ve sent:
						</p>
						<p>
							Name: %s<br>
							Email: %s<br>
							Phone: %s
						</p>
					',
					'footer'=>''
				),
				'message'=>array(
					'subject'=>'%s: New contact inserted',
					'body'=>'
						<p>
							A new contact was inserted through the form on the maintenance page.<br>
							Below, you can find a copy of the sent informations:
						</p>
						<p>
							Name: %s<br>
							Email: %s<br>
							Phone: %s
						</p>
					',
					'footer'=>''
				)
			)
		)
	)
);