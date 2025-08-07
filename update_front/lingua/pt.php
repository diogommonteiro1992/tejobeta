<?
return $text = array(
	'manutencao'=>array(
		'em_manutencao' => 'O site encontra-se em actualização. Obrigado pela sua visita. Seremos breves!',
		'messages'=>array(
			'contact_form'=>array(
				'success'=>'Contacto adicionado',
				'error_email'=>'Email inválido'
			)
		)
	),
	'manutencao_login'=>array(
		"h2" => "Página em Manutenção - Autenticação",
		"em_manutencao" => "O website que está a tentar visualizar encontra-se em manutenção. caso queira algumas informações contacte o administrador. geral@worldwidedesign.pt",
		"seremos_breves" => "Desculpe o incómodo, prometemos ser breves."
	),//textos da caixa de manutençao
	'misc'=>array(//outros campos comuns a todos
		'locale_mysql'=>'pt_PT',
		'locale_google_maps'=>'pt-PT',
		'locale'=>'pt',
		'company'=>'Empresa',
		'email'=>'E-mail',
		'ok'=>'OK',
		'back'=>'Voltar',
		'banner_cookies'=>array(
			'text'=>'Este site utiliza cookies para ajudar na sua navegação e operações. Alguns dos cookies que usamos são necessários ao desempenho e execução do Software e serviços associados. O armazenamento de outros "cookies" dependerá sempre da sua aceitação e consentimento que poderá ser retirado a todo o tempo através de ferramentas específicas do browser.',
			'accept'=>'Aceitar',
			'refuse'=>'Recusar',
			'link'=>'Mais informações'
		),
		'ext' => array(
			'data' => array(
				'consentment' => 'Consinto com o tratamento de dados conforme o <a href="/terms.html?lightbox[height]=60p&amp;lightbox[width]=50p&amp;page=gdpr" class="lightbox" rel="nofollow">RGPD</a>' 
			),
			'store' => array(
				'vat' => 'IVA',
				'vat_exempt_art_53' => 'Os preços apresentados não incluem IVA ao abrigo do artigo 53º do CIVA',
				'vat_shown' => 'Os preços apresentados incluem IVA à taxa legal em vigor',
				'vat_not_shown' => 'Aos preços apresentados acresce IVA à taxa legal em vigor'
			)
		),
		'fields'=>array(
			'country'=>array(
				'desc'=>'País',
				'placeholder'=>'Escolha um país'
			)
		)
	),
	'contact'=>array(//parte de contacto
		//texto da secçao 'find-us'
		'find_us'=>'Encontre-nos aqui',
		'phone'=>'Telefone',
		'cellphone'=>'Telemóvel',
		'fax'=>'Fax',
		'tweets'=>'Tweets mais recentes',
		//seccao de envio de email
		'name'=>'Nome',
		'subject'=>'Assunto',
		'message'=>'Mensagem',
		'send'=>'Enviar',
		'other'=>'Outros contactos',
		'obs'=>'Observações',
		'lang'=>'Língua',
		'captcha'=>'Responda à pergunta anti-spam',
		//layout: dates
		'start_date'=>'Data de recolha',
		'end_date'=>'Data de entrega',
		//layout: booking
		'pickup'=>'Origem',
		'adults'=>'Nº adultos',
		'children'=>'Nº crianças &lt; 2 anos',
		'dropoff'=>'Chegada',
		'pickup_date'=>'Data de partida',
		'flight'=>'Nº vôo',
		//layout: <<end>>
		'box'=>array(
			'header'=>array(
				'error'=>'OCORREU UM ERRO',
				'success'=>'PEDIDO DE INFORMAÇÕES ENVIADO'
			),
			'failure'=>'Não foi possível enviar o seu email',
			'invalid'=>'Introduza um e-mail válido',
			'not_checked'=>'É obrigatório aceitar a Política de Privacidade',
			'empty'=>'Por favor, preencha todos os campos',
			'success'=>'O seu pedido de informações foi enviado com sucesso.<br>Entraremos em contacto consigo brevemente!',
			'wrong_captcha'=>'A resposta do captcha está incorrecta',
			'refresh'=>'Actualize a página e tente novamente',
			'spam'=>array(
				'link'=>array(
					'desc'=>array(
						'top'=>'Foi detectada uma ligação ou um email no campo ',
						'bottom'=>' e não foi possível enviar a mensagem.<br>Por favor, remova a ligação para continuar.'
					),
					'name'=>'do nome',
					'subject'=>'do assunto',
					'message'=>'da mensagem'
				),
				'ip'=>'Foi enviado o número máximo de emails permitidos neste formulário.'
			),
			'ext' => array(
				'data' => array(
					'consentment' => 'Consentimento requerido'
				)
			)
		),
		'map' => array(
			'touch' => 'Use dois dedos para mover o mapa',
			'scroll' => 'Pressione CTRL e role a tela simultaneamente para aplicar zoom no mapa',
			'scrollMac' => 'Pressione \\u2318 e role a tela simultaneamente para aplicar zoom no mapa'
		)
	),
	'review'=>array(//review part
		'title'=>'Comentários',
		'button'=>'Deixar Comentário',
		'desc'=>'Preencha os seguintes dados para continuar',
		'fields'=>array(
			'country'=>array(
				'desc'=>'País',
				'placeholder'=>'Escolha um país'
			),
			'first_name'=>'Nome',
			'last_name'=>'Apelido',
			'classification'=>'Classificação',
			'obs'=>'Comentário'
		),
		'email'=>array(
			'personal'=>array(
				'subject'=>'%s: Comentário',
				'title'=>'Recebeu um novo comentário com os seguintes detalhes: '
			),
			'client'=>array(
				'subject'=>'%s: Comentário',
				'title'=>'O seu comentário foi enviado com sucesso com os seguintes detalhes: '
			),
			'fields'=>array(
				'first_name'=>'Nome',
				'last_name'=>'Apelido',
				'email'=>'Email',
				'lang'=>'Língua',
				'phone'=>'Telefone',
				'obs'=>'Comentário'
			)//
		)
	),
	'subscribe'=>array(
		'title'=>'Pedido de informação',
		'fields'=>'Preencha os campos com os seus dados',
		'ob_fields'=>'Campos obrigatórios',
		'error'=>array(
			'title'=>'Erro ao enviar',
			'desc'=>'Um erro inesperado impediu o envio do seu pedido.',
			'p'=>'Por favor, tente novamente mais tarde, ou contacte-nos.',
			'back'=>'Voltar'
		),
		'error_sent'=>array(
			'title'=>'Pedido enviado com sucesso',
			'desc'=>'O seu pedido foi enviado com sucesso, porém ocorreu um erro ao enviar o email de confirmação.',
			'back'=>false
		),
		'error_limit'=>array(
			'title'=>'Erro ao enviar',
			'desc'=>'Não foi possível enviar o seu pedido.',
			'p'=>'Excedeu o límite máximo de mensagens.<br>Poderá tentar novamente mais tarde.',
			'back'=>false
		),
		'error_captcha'=>array(
			'title'=>'Erro ao enviar',
			'desc'=>'Não foi possível enviar o seu pedido.',
			'p'=>'A resposta dada no captcha está incorrecta.<br>Poderá voltar atrás e tentar novamente.',
			'back'=>'Voltar'
		),
		'error_link'=>array(
			'title'=>'Erro ao enviar',
			'desc'=>'Não foi possível enviar o seu pedido.',
			'p'=>'Foi encontrada uma possível ligação no campo %s.<br>Por favor, volte atrás e tentar novamente.',
			'back'=>'Voltar',
			'fields'=>array(
				'name'=>'do nome',
				'phone'=>'do telefone',
				'obs'=>'de observações'
			)
		),
		'success'=>array(
			'title'=>'Pedido enviado com sucesso',
			'desc'=>'O seu pedido foi enviado com sucesso.<br>Também enviamos para si um email de confirmação do pedido.',
			'p'=>'Caso tenha alguma duvida, não hesite em <a href="#contact">contactar-nos</a>.',
			'back'=>false
		)
	),
	'portfolio'=>array(
	),
	'about'=>array(
		'activities'=>'Actividades',
		'recruit'=>array(//recruit part
			'title'=>'Recrutamento',
			'desc'=>'Preencha os seguintes dados para continuar',
			'cv'=>"Curriculum vitae",//\xe6 -> &aelig;
			'messages'=>array(
				'error'=>'Erro ao carregar ficheiro',
				'invalid'=>'Ficheiro inválido',
				'success'=>'Recrutamento recebido c/ sucesso'
			),
			'fields'=>array(
				'birth_date'=>'Data de nascimento',
				'country'=>array(
					'desc'=>'País',
					'placeholder'=>'Escolha um país'
				),
				'full_time'=>array(
					'title'=>'Horário',
					'placeholder'=>'Escolha um horário',
					'options'=>array('Part-time','Full-time')
				),
				'full_name'=>'Nome completo',
				'city'=>'Cidade'
			),
			'email'=>array(
				'personal'=>array(
					'subject'=>'%s: Candidatura',
					'title'=>'Recebeu uma nova candidatura com os seguintes detalhes: ',
					'file'=>'Pressione para abrir o'
				),
				'client'=>array(
					'subject'=>'%s: Candidatura',
					'title'=>'A sua candidatura foi enviada com sucesso com os seguintes detalhes: '
				),
				'fields'=>array(
					'full_name'=>'Nome completo',
					'birth_date'=>'Data de nascimento',
					'city'=>'Cidade',
					'email'=>'Email',
					'lang'=>'Língua',
					'phone'=>'Telefone',
					'obs'=>'Mensagem',
					'open'=>'Curriculum Vitae'
				)//
			)
		)
	),
	'news'=>array(
		'read_more'=>'Abrir link',
		'date'=>array(
			'mysql'=>'%d %b %Y',//este valor esta a ser aproveitado para a data do email do recrutamento
			'php'=>'d M Y'
		),
		'store'=>array(
			'search'=>'Pesquisar',
			'all'=>'Todos'
		),
		'sold_out' => 'Esgotado',
		'search' => array(
			'search' => 'Pesquisar',
			'pages' => 'Páginas',
			'categories' => 'Categorias',
			'all' => 'Todos'
		)
	),
	'recruit'=>array(
		'sent'=>'Recrutamento enviado',
		'error_network'=>'Erro de ligação',
		'error_file_rejected'=>'Ficheiro rejeitado',
		'error_limit'=>'Atingiu o limite de mensagens'
	),
	'js'=>array(
		'twitter_loading'=>'A procurar Twittes...',
		'nav_go_to'=>'Ir para...',
		'date'=>'dd-mm-yy'
	),
	'header' => array(
		'search' => 'Pesquisar'
	),
	'footer'=>array(
		'c1s'=>array(
			'title'=>'Criado com Criar1Site',
			'url'=>'http://criar1site.pt/pt'
		),
		'terms_and_conditions' => 'Termos e condições',
		'gdpr' => 'RGPD'
	),
	'404' => array(
		'title' => 'Página não encontrada',
		'desc' => 'A página que tentou ver não foi encontrada',
		'p' => 'Poderá experimentar:',
		'list' => array(
			'back' => 'Voltar à página anterior',
			'home' => 'Ir para "%s"',
			'contact' => 'Contactar-nos, indicando a página visitada'
		)
	),
	'email' => (
		$email = array(
			'confirm'=>array(
				'subject'=>'%s: Contacto',
				'body'=>'
		<p>Obrigado pelo seu contacto.</p>
		<p>Iremos analisar a sua mensagem e responderemos o mais breve possível.</p>
		<p>Segue uma cópia da mensagem:</p>
		<i>%s</i>
		',
				'footer'=>''
			),
			'message'=>array(
				'subject'=>'%s: Contacto',
				'body'=>'
		<h2><font size="4" face="sans-serif">Recebeu um novo contacto com os seguintes detalhes:</font></h2>
		Nome: %s<br/>
		Email: %s<br/>
		Assunto: %s<br/>
		Idioma: %s<br/>
		Mensagem:<br/>
		%s
		',
				'footer'=>''
			),
			'maintenance_form'=>array(
				'confirm'=>array(
					'subject'=>'%s: Contacto inserido',
					'body'=>'
						<p>
							O seu contato foi inserido com sucesso.<br>
							Em baixo, segue uma cópia dos dados inseridos:
						</p>
						<p>
							Nome: %s<br>
							Email: %s<br>
							Telefone: %s
						</p>
					',
					'footer'=>''
				),
				'message'=>array(
					'subject'=>'%s: Novo contacto inserido',
					'body'=>'
						<p>
							Foi inserido um novo contacto através do formulário da página de manutenção.<br>
							Em baixo, segue uma cópia dos dados inseridos:
						</p>
						<p>
							Nome: %s<br>
							Email: %s<br>
							Telefone: %s
						</p>
					',
					'footer'=>''
				)
			)
		)
	)
);