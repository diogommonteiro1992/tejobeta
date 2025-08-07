<?
	$text=array(
		'misc'=>array(
			'title'=>'Backoffice',
			'save'=>'Guardar',
			'cancel'=>'Cancelar',
			'update'=>'Actualizar',
			'add'=>'Adicionar',
			'options'=>'Opções',
			'active'=>array('m'=>'Activo','f'=>'Activa'),
			'inactive'=>array('m'=>'Inactivo','f'=>'Inactiva'),
			'active_inactive'=>array('m'=>'%s Activo/Inactivo','f'=>'%s Activa/Inactiva'),
			'edit'=>'Editar',
			'delete'=>'Eliminar',
			//'time'=>'Data/Hora',
			'upload_images'=>'Carregar Imagem',
			'recommended_size'=>'Tamanho Recomendado',
			'choose_image'=>'Escolher Imagens',
			'access_error'=>'<h3>Erro de acesso à página</h3><p>Tentou aceder a uma página inexistente neste site ou uma página que não tem permissões de acesso.</p>',
			'server_time'=>array(
				'server'=>'Servidor',
				'local'=>'Local',
				'date_time'=>'Data e Hora',
			),
			'update_website'=>'Actualizar site',
			'messages'=>array(
				'error'=>array(
					'connection'=>'Erro de ligação',
					'deleted'=>array(
						'image'=>'Imagem eliminada'
					)
				),
				'success'=>array(
					'positions'=>'Posições alteradas'
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
				'icon'=>'Ícone',
				'name'=>'Nome',
				'desc'=>'Descrição',
				'title'=>'Título',
				'preview'=>'Pré-visualização',
				'models'=>'Nº Modelos',
				'store'=>'Loja',
				'filter'=>'Filtro',
				'visible'=>'Visível',
				'columns'=>'Colunas',
				'date'=>array(
					'start'=>'Data início',
					'end'=>'Data fim',
					'publish'=>'Data pub.'
				),
				'options'=>array(
					'title'=>'Opções',
					'delete'=>'Eliminar',
					'edit'=>'Editar',
					'edit_model'=>'Modelos',
					'private' => 'Privado/a'
				)
			),
			'chars'=>array(
				'required'=>'Obrigatório, Caracteres permitidos',
				'required_accents'=>'Obrigatório, Caracteres permitidos (acentos incluídos)',
				'allowed'=>'Caracteres permitidos',
				'allowed_accents'=>'Caracteres permitidos (acentos incluídos)',
				'youtube'=>'Exemplos: &nbsp; http://www.youtube.com/watch?v=MmAMTmO18Bw &nbsp; http://youtu.be/MmAMTmO18Bw &nbsp; youtu.be/MmAMTmO18Bw &nbsp; MmAMTmO18Bw',
				'ga'=>'UA-xxxxxxx-y (x representa um número e y um número maior que 1)'
			),
			'fields'=>array(
				'active'=>'Activo',
				'soldout'=>'Esgotado',
				'title'=>'Título',
				'desc'=>'Descrição',
				'external_link'=>'Ligação externa',
				'content'=>'Conteúdo',
				'name'=>'Nome',
				'youtube'=>array(
					'title'=>'URL ou ID de filme do Youtube',
					'desc'=>'O slideshow será substituído por este vídeo, se presente.',
					'placeholder'=>'http://www.youtube.com/watch?v=&lt;id_video&gt;',
					'help'=>'Exemplos: &nbsp; http://www.youtube.com/watch?v=MmAMTmO18Bw &nbsp; http://youtu.be/MmAMTmO18Bw &nbsp; youtu.be/MmAMTmO18Bw &nbsp; MmAMTmO18Bw'
				),
				'date'=>array(
					'start'=>'Data inicial',
					'end'=>'Data final',
					'publish'=>'Data publicação'
				),
				'category'=>array(
					'label'=>'Categoria do produto',
					'placeholder'=>'Escolha uma categoria',
					'none' => 'Nenhuma categoria'
				),
				'vat'=>array(
					'label'=>'IVA do produto',
					'placeholder'=>'Escolha o IVA'
				),
				'color'=>array(
					'label'=>'Cores do produto'
				),
				'sub_group'=>array(
					'label'=>'Sub-página',
					'small'=>'Define a sub-página em que será apresentada'
				),
				'private'=>array(
					'label'=>'Privado/a',
					'small'=>'Define se é necessário iniciar sessão para ver este conteúdo'
				)
			),
			'js'=>array(
				'messages'=>array(
					'error'=>array(
						'connection'=>'Erro de ligação',
						'name'=>'Nome incorrecto',
						'desc'=>'Descrição incorrecta',
						'deleted_image'=>'Imagem Inexistente',
						'youtube_video'=>'Video Inexistente',
						'wrong_password'=>'Palavra-passe incorrecta',
						'member_non-existing'=>'Membro Inexistente',
						'crm_contact'=>array(
							'inserted'=>'Erro a inserir'
						)
					),
					'success'=>array(
						'name_saved'=>'Nome guardado',
						'desc_saved'=>'Descrição guardada',
						'icon_saved'=>'Ícone alterado',
						'pos_saved'=>'Posições Alteradas',
						'high_saved'=>'Destaque alterado',
						'settings_saved'=>'Definições alteradas',
						'data_saved'=>'Dados alterados',
						'value_saved'=>'Valor alterado',
						'color_saved'=>'Cor alterada',
						'upload_complete'=>'Carregamento Completo',
						//========================================
						'page_active'=>'Página activa',
						'page_inactive'=>'Página inactiva',
						'store_active'=>'Loja activa',
						'store_inactive'=>'Loja inactiva',
						'filter_active'=>'Filtro activo',
						'filter_inactive'=>'Filtro inactivo',
						'columns_changed'=>'Nº Colunas guardado',
						//========================================
						'crm_contact'=>array(
							'edited'=>'Contacto guardado',
							'inserted'=>'Contacto Inserido',
							'deleted'=>'Contacto Eliminado'
						),
						'crm_categories'=>array(
							'active'=>'Categoria activa',
							'inactive'=>'Categoria inactiva',
							'delete'=>'Categoria eliminada',
							'edited'=>'Categoria Editada',
							'inserted'=>array(
								'success'=>'Categoria Inserida',
								'error'=>'Erro ao Inserir Categoria'
							)
						),
						//========================================
						'activity'=>array(
							'saved'=>'Actividade inserida',
							'active'=>'Actividade activa',
							'inactive'=>'Actividade inactiva',
							'delete'=>'Actividade eliminada'
						),
						'image'=>array(
							'active'=>'Imagem activa',
							'inactive'=>'Imagem inactiva',
							'delete'=>'Imagem Eliminada',
							'edited'=>'Imagem Editada'
						),
						'team'=>array(
							'active'=>'Membro activo',
							'inactive'=>'Membro inactivo',
							'delete'=>'Membro eliminado',
							'edited'=>'Membro Editado'
						),
						'portfolio'=>array(
							'active'=>'%s activo',
							'inactive'=>'%s inactivo',
							'delete'=>'%s eliminado',
							'edited'=>'%s Editado'
						),
						'news'=>array(
							'active'=>'%s activo',
							'inactive'=>'%s inactivo',
							'delete'=>'%s eliminado',
							'edited'=>'%s Editado'
						),
						'highlight'=>array(
							'active'=>'Destaque activo',
							'inactive'=>'Destaque inactivo',
							'delete'=>'Destaque eliminado',
							'edited'=>'Destaque editado',
							'inserted'=>'Destaque inserido'
						),
						'administrators'=>array(
							'delete'=>'Administrador eliminado',
							'insert'=>'Administrador adicionado'
						),
						//========================================
						'ext_private_changed' => 'Privado alterado'
					)
				),
				'dialogs'=>array(
					'delete'=>array(
						'title'=>'Confirmação',
						'msg'=>'Tem a certeza que quer eliminar?',
						'buttons'=>array(
							'yes'=>'Sim',
							'no'=>'Não'
						),
						'loading'=>'A eliminar'
					),
					'activity'=>array(
						'cancel_add'=>array(
							'title'=>'Cancelar adição',
							'msg'=>'Esta actividade foi preenchida e não foi gravada.<br>Tem a certeza que deseja cancelar a adição desta actividade?',
							'buttons'=>array(
								'yes'=>'Sim',
								'no'=>'Não'
							)
						),
						'save'=>array(
							'title'=>'Confirmação',
							'msg'=>'Deseja activar esta actividade?<br>Se activar, ficará logo disponível no site.',
							'buttons'=>array(
								'yes'=>'Sim',
								'no'=>'Não'
							)
						),
						'delete'=>array(
							'title'=>'Confirmação',
							'msg'=>'Tem a certeza que quer eliminar ',
							'buttons'=>array(
								'yes'=>'Sim',
								'no'=>'Não'
							),
							'loading'=>'A eliminar'
						)
					),
					'team'=>array(
						'new'=>array(
							'title'=>'Novo item',
							'msg'=>'Este item foi criado recentemente<br/>Deseja colocá-lo como activo?',
							'buttons'=>array(
								'yes'=>'Sim',
								'no'=>'Não'
							)
						)
					),
					'portfolio'=>array(
						'new'=>array(
							'title'=>'Novo item',
							'msg'=>'Este item foi criado recentemente<br/>Deseja colocá-lo como activo?',
							'buttons'=>array(
								'yes'=>'Sim',
								'no'=>'Não'
							)
						)
					),
					'news'=>array(
						'new'=>array(
							'title'=>'Novo/a %s',
							'msg'=>'Este/a %s foi criado/a recentemente<br/>Deseja colocá-lo/a como activo/a?',
							'buttons'=>array(
								'yes'=>'Sim',
								'no'=>'Não'
							)
						)
					),
					'highlights'=>array(
						'new'=>array(
							'title'=>'Novo Destaque',
							'msg'=>'Este destaque foi criado recentemente<br>Deseja colocá-lo como activo?',
							'buttons'=>array(
								'yes'=>'Sim',
								'no'=>'Não'
							)
						)
					),
					'slideshow'=>array(
						'new'=>array(
							'title'=>'Nova Imagem',
							'msg'=>'Esta imagem foi criada recentemente<br>Deseja colocá-la como activa?',
							'buttons'=>array(
								'yes'=>'Sim',
								'no'=>'Não'
							)
						)
					)
				),
				'uploadify'=>array(
					'success'=>'Imagem carregada',
					'error'=>'Erro ao carregar',
					'files'=>'Imagens (*.jpg, *.jpeg, *.gif, *.png)|Imagens JPEG (*.jpg, *.jpeg)|Imagens GIF (*.gif)|Imagens PNG (*.png)|Todos os ficheiros (*.*)'
				),
				'jcrop'=>array(//
					'title'=>'Carregar imagem',
					'loading'=>'Carregar',
					'resizing'=>'Redimens.',
					'error'=>array(
						'invalid'=>'Imagem inválida',
						'reading'=>'Erro ao ler'
					),
					'buttons'=>array(
						'upload'=>'Carregar',
						'rotate'=>'Rodar',
						'cancel'=>'Cancelar'
					)
				)
			)
		),
		'header'=>array(
			'changelog'=>array(
				'version'=>'Versão',
				'updated'=>'Atualizado a',
				'title'=>'Novas Funcionalidades',
				'desc'=>'Conheça as mais recentes atualizações'
			),
			'wellcome'=>'Bem-vindo',
			'account'=>'Definições da Conta',
			'logout'=>'Terminar Sessão'
		),
		'menu'=>array(
			'pages'=>'Editar Páginas',
			'reviews_list'=>'Comentários',
			'settings'=>'Definições',
			'admin'=>array(
				'title'=>'Área WWD',
				'list'=>'Ver administrador',
				'add'=>'Adicionar administrador'
			),
			'home'=>array(
				'slideshow'=>'Slideshow',
				'highlights'=>'Destaques',
				'highlights_settings'=>'Definições dos Destaques',
				'slideshow_settings'=>'Definições do Slideshow'
			),
			'about'=>array(
				'content'=>'Conteúdo',
				'highlights'=>'Destaques',
				'settings'=>'Definições'
			),
			'news'=>array(
				'categories'=>'Categorias'
			),
			'crm'=>array(
				'title'=>'CRM',
				'contacts'=>'Contactos',
				'categories'=>'Categorias'
			)
		),
		'pages_list'=>array(//?p=pages_list
			'store_enabled'=>'Loja Activa',
			'tooltips'=>array(
				'store'=>'Loja Activa/Inactiva',
				'filter'=>'Filtro Activo/Inactivo'
			)
		),
		'home'=>array(
			'slideshow'=>array(//?p=slideshow
				'list'=>array(
					'title'=>'Slideshow',
					'header'=>'Imagens do Slideshow',
					'image'=>'Imagem',
					'active'=>'Imagem activa',
					'inactive'=>'Imagem inactiva',
					'active_inactive'=>'Imagem activa/inactiva'
				),
				'edit'=>array(//?p=alterar_slide&id_slide=<n>
					'details'=>array(
						'title'=>'Detalhes da imagem',
						'header'=>'Descrição da imagem'
					),
					'image'=>array(
						'header'=>'Imagem do slideshow'
					),
					'lightbox'=>array(
						'title'=>'Associação a '.current(mysql_fetch_assoc(mysql_query('select name from pages where `group`=4 and lang=(select id from lang where name="pt")'))).' ou '.current(mysql_fetch_assoc(mysql_query('select name from pages where `group`=5 and lang=(select id from lang where name="pt")'))),
						'desc'=>'Permite o cliente carregar no item e apresentar os detalhes do item associado',
						'none'=>'Nenhum'
					)
				)
			),
			'slideshow_settings'=>array(//?p=definicoes_slideshow
				'title'=>'Definições',
				'title_header'=>'Definições de apresentação'
			),
			'highlights'=>array(//?p=destaques
				'list'=>array(//?p=destaques
					'header'=>'Lista de destaques',
					'insert'=>'Adicionar Destaque'
				),
				'edit'=>array(//?p=alterar_destaque&id_destaque=<n>
					'title'=>'Alterar destaque - nº %d',
					'details'=>array(
						'header_title'=>'Detalhes do Destaque',
						'active'=>'Activo',
						'icon'=>'Ícone',
						'title'=>'Título'
					),
					'content'=>array(
						'header_title'=>'Conteúdo do Destaque',
					)
				),
				'insert'=>array(//?p=inserir_destaque
					'title'=>'Adicionar Destaque',
					'add'=>'Adicionar Destaque',
					'header'=>array(
						'details'=>'Detalhes do Destaque',
						'content'=>'Conteúdo do Destaque'
					)
				)
			),
			'highlights_settings'=>array(//?p=definicao_destaque_inicio
				'title'=>'Activar/Desactivar Destaques',
				'active'=>'Activar Destaque',
				'hide_icons'=>'Esconder ícones'
			)
		),
		'about'=>array(
			'content'=>array(//?p=about_conteudo
				'header'=>array(
					'title'=>'Dados dos destaques da página %s',
					'left'=>'Destaque Esquerdo',
					'right'=>'Destaque Direito'
				),
				'title'=>'Título do destaque',
				'content'=>'Conteúdo do destaque'
			),
			'activities'=>array(//?p=about_actividades
				'title'=>'Lista de Actividades',
				'%'=>'Percentagem',
				'color'=>'Cor da actividade',
				'active'=>'Actividade activa/inactiva',
				'name'=>'Nome',
				'cancel_add'=>'Cancelar adição'
			),
			'highlights'=>array(//?p=about_destaques
				'header'=>array(
					'title'=>'Dados dos destaques da página %s'
				),
				'title'=>'Título do destaque'
			),
			'settings'=>array(//?p=definicoes_actividade
				'header'=>array(
					'title'=>'Alterações de conteúdo'
				),
				'title'=>'Alterações',
				'activity'=>'Actividade',
				'diagram'=>'Diagrama Activo',
				'highlights'=>'Destaques Activos'
			)
		),
		'team'=>array(
			'list'=>array(//?p=equipa
				'header'=>array(
					'add_from_image'=>'Adicionar item a partir de imagem',
					'elements'=>'Itens de %s'
				),
				'columns'=>array(
					'photo'=>'Foto',
					'name'=>'Nome',
					'position'=>'Cargo'
				)
			),
			'edit'=>array(//?p=alterar_equipa&id_team=<n>
				'title'=>'Editar item de %s - Nº %d',
				'header'=>array(
					'details_contact'=>'Detalhes de Publicação e de Contacto',
					'details_publish'=>'Mais informações',
					'image'=>'Imagem'
				),
				'position'=>'Cargo'
			)
		),
		'portfolio'=>array(
			'list'=>array(//?p=portfolio
				'headers'=>array(
					'add_from_image'=>'Inserir item no/a %s',
					'list'=>'Lista de itens do %s'
				),
				'active_inactive'=>'%s activo/inactivo'
			),
			'edit'=>array(//?p=alterar_portfolio&id_portfolio=<n>
				'header'=>array(
					'details_publish'=>'Detalhes de Publicação',
					'details_content'=>'Conteúdo',
					'image'=>'Imagens'
				),
				'title'=>'Alterar %s - Nº %d'
			),
			'no_date'=>array(
				'table_start_date'=>'Sem data',
				'table_end_date'=>'Nunca',
				'field_end_date'=>'Nunca',
			)
		),
		'news'=>array(
			'list'=>array(//?p=news
				'header'=>array(
					'add_from_image'=>'Adicionar %s a partir de imagem',
					'list'=>'Lista de %s'
				),
				'colors' => array(
					'title' => 'Editar cores do/a %s',
					'product_colors' => 'Cores do/a %s',
					'not_product_colors' => 'Cores restantes',
					'saved' => 'Cores guardadas',
					'table' => array(
						'options' => array(
							'colors' => 'Cores'
						)
					)
				)
			),
			'edit'=>array(//?p=news_edit&id=<n>
				'title'=>'Alterar %s - Nº %d',
				'header'=>array(
					'details_publish'=>'Detalhes de publicação',
					'content_preview'=>'Conteúdo da pré-visualização',
					'content_lightbox'=>'Conteúdo da lightbox',
					'descriptive_column'=>'%s Coluna Descritiva',
					'images'=>'Imagens do(a) %s',
					'docs'=>'Documentos',
					'columns'=>array(
						'1st'=>'1ª Coluna Descritiva',
						'2nd'=>'2ª Coluna Descritiva',
						'3rd'=>'3ª Coluna Descritiva'
					)
				),
				'images'=>array(
					'warning'=>'Aviso: a 1ª imagem será a imagem principal. Esta mesma não poderá ser eliminada.',
					'empty'=>'Sem imagens disponíveis'
				),
				'docs'=>array(
					'view_file'=>'Ver Ficheiro',
					'choose'=>'Escolher Documento',
					'upload'=>'Carregar Doc.',
					'messages'=>array(
						'deleted'=>'Ficheiro eliminado',
						'title'=>'Título alterado',
						'upload'=>'Ficheiro Carregado'
					),
					'language'=>'Língua'
				),
				'fields'=>array(
					'category'=>'Categoria'
				)
			),
			'categories'=>array(
				'title'=>'Dados gerais do produto',
				'cats'=>array(
					'title'=>'Categorias',
					'delete'=>array(
						'title'=>'Eliminar categoria',
						'message'=>'Tem a certeza que deseja eliminar esta categoria?',
						'buttons'=>array(
							'yes'=>'Sim',
							'no'=>'Não'
						),
						'deleted'=>'Categoria Eliminada'
					),
					'edit'=>array(
						'desc'=>'Descrição guardada',
						'active'=>'Activação guardada'
					),
					'insert'=>array(
						'title'=>'Inserir categoria',
						'success'=>'Categoria inserida',
						'error'=>'Erro ao inserir'
					)
				),
				'fields'=>array(
					'category'=>array(
						'label'=>'Categoria do produto',
						'placeholder'=>'Escolha uma categoria'
					),
					'vat'=>array(
						'label'=>'IVA do produto',
						'placeholder'=>'Escolha o IVA'
					),
					'ref'=>array(
						'label'=>'Referência'
					),
					'price'=>array(
						'label'=>'Preço do modelo, sem IVA'
					)
				),
				'table'=>array(
					'n_news'=>'Nº Notícias'
				)
			)
		),
		'contacts'=>array(//?p=contactos
			'header'=>'Dados de contacto',
			'field'=>array(
				'location'=>array(
					'title'=>'Dados da localização',
					'street_number'=>array(
						'title'=>'Rua / Número'
					),
					'city_contry'=>array(
						'title'=>'Cidade / País'
					),
					'google_maps'=>array(
						'title'=>'Ligação do Google Maps',
						'help'=>'NÃO utilizar a opção "URL Abreviado"'
					)
				),
				'contact'=>array(
					'title'=>'Dados de contacto',
					'phone'=>array(
						'title'=>'Número de telefone fixo'
					),
					'fax'=>array(
						'title'=>'Número de fax'
					),
					'cellphone'=>array(
						'title'=>'Número de telemóvel'
					),
					'skype'=>array(
						'title'=>'Nome de utilizador do Skype'
					)
				),
				'social'=>array(
					'title'=>'Redes sociais e Email',
					'email'=>array(
						'title'=>'Email de contacto',
						'help'=>'Este email também será utilizado para receber as mensagens'
					)
				)
			)
		),
		'crm_contacts'=>array(
			'list'=>array(//?p=crm_contacts
				'header'=>array(
					'title'=>'Lista de contactos'
				),
				'name'=>'Nome',
				'mail'=>'Email',
				'date'=>'Data',
				'birth_date'=>'Data&nbsp;Nascimento',
				'city'=>'Cidade',
				'country'=>'País',
				'phone'=>'Telefone',
				'full_time'=>'Full Time/Part Time',
				'file'=>'Ficheiro',
				'lang'=>'Lingua',
				'ip'=>'IP',
				'obs'=>'Observações',
				'message'=>'Mensagem',
				'categories'=>'Categorias',
				'lang'=>'Língua',
				'source'=>array(
					'title'=>'Origem',
					'sources'=>array(
						'crm'=>'CRM',
						'back'=>'Backoffice',
						'recruit'=>'Recrutamento',
						'contact'=>'Formulário',
						'demo'=>'Demo',
						'ext_store'=>'Loja online',
						'ext_newsletter'=>'Newsletter',
						'review'=>'Comentários',
						'subscribe'=>'Formulário: '.current(mysql_fetch_row(mysql_query('select form_subscribe_text from site where lang=(select id from lang where name="pt")')))
					)
				),
				'table'=>array(
					'options'=>array(
						'file'=>'Ficheiro recebido pelo site'
					)
				),
				'newsletter'=>array(
					'active'=>'Newsletter activa',
					'inactive'=>'Newsletter inactiva',
					'tooltip'=>'Newsletter Activa/Inactiva'
				),
				'add'=>'Adicionar contacto'
			),
			'edit'=>array(
				'title'=>'Editar contacto - Nº %d',
				'fields'=>array(
					'birth_date'=>'Data de nascimento',
					'email'=>'Email',
					'phone'=>'Telefone',
					'schedule'=>array(
						'title'=>'Horário',
						'options'=>array('Part-time','Full-time')
					),
					'id_countries'=>'País',
					'city'=>'Cidade',
					'id_categories'=>'Categorias',
					'obs'=>'Observações',
					'message'=>'Mensagem',
					'file'=>'Ficheiro'
				),
				'lang'=>'Língua',
				'notes'=>'Aconselhamos precaução ao abrir o seguinte ficheiro.<br>Visto que é um ficheiro externo, não temos controlo sobre o conteúdo do mesmo.'
			),
			'insert'=>array(
				'title'=>'Inserir contacto'
			)
		),
		'crm_cats'=>array(
			'list'=>array(//?p=crm_cats
				'header'=>array(
					'title'=>'Lista de Categorias',
					'insert'=>'Inserir nova Categoria'
				),
				'name'=>'Nome',
				'active'=>'Activa / Inactiva',
				'options'=>array(
					'contacts'=>'Contactos da categoria'
				)
			)
		),
		'reviews_list'=>array(//?p=reviews_list
			'title'=>'Lista de Comentários',
			'to_review'=>'por rever',
			'table'=>array(
				'country'=>'País',
				'email'=>'Email',
				'phone'=>'Telefone',
				'date'=>'Data',
				'rating'=>'Class.'
			)
		),
		'reviews_edit'=>array(//?p=reviews_edit
			'title'=>'Editar Comentário nº %d',
			'headers'=>array(
				'details'=>'Detalhes do comentário',
				'content'=>'Conteúdo do comentário'
			),
			'fields'=>array(
				'published'=>'Publicado',
				'country'=>'País',
				'email'=>'Email',
				'phone'=>'Telefone',
				'date'=>'Data',
				'original'=>'Conteúdo Original',
				'content'=>'Conteúdo'
			)
		),
		'site'=>array(//?p=site
			'title'=>'Definições Gerais do Site',
			'header'=>array(
				'settings'=>'Definições do site',
				'publish'=>'Definições de publicação',
				'seo'=>'Optimização para Motores de Busca',
				'colors'=>'Definições de cores',
				'style'=>'Estilo do site',
				'general'=>'Definições Gerais',
				'recruit'=>'Definições do recrutamento',
				'recruit_lang'=>'Textos em ',
				'news_categories' => 'Definições das categorias das notícias'
			),
			'fields'=>array(
				'name'=>'Nome do site',
				'lang'=>'Língua activa',
				'maintenance'=>'Em manutenção',
				'desc'=>'Descrição do Site',
				'keywords'=>'Keywords do Site',
				'logo'=>'Logotipo do site',
				'background'=>array('odd'=>'Cores de fundo (páginas ímpares)','even'=>'Cores de fundo (páginas pares)'),
				'gradient'=>'Tipo de gradiente',
				'favicon'=>'Favicon do site',
				'logo_back'=>'Logotipo do Backoffice',
				'divisor'=>'Divisor',
				'choose_color'=>'Escolha uma cor',
				'high_style'=>'Activar barra do menu mais alta',
				'title'=>'Título',
				'desc'=>'Descrição',
				'recruit_active'=>'Recrutamento activo',
				'c1s_logo_footer'=>'Logotipo do C1S no rodapé do site',
				'captcha_contact_form'=>'Captcha no formulário de contacto',
				'ga'=>'ID do Google Analytics',
				'image_resolutions'=>'Resoluções Imagens',
				'image_resolutions_edit'=>'Editar Resoluções',
				'css_fix'=>'Ficheiro de Fix de CSS',
				'css_fix_edit'=>'Editar CSS',
				'subscribe_form'=>'Formulário de inscrição activo',
				'subscribe_captcha'=>'Captcha no formulário de inscrição',
				'subscribe_button'=>'Nome do botão',
				'subscribe_template'=>'Template do formulário de subscrição',
				'subscribe_template_edit'=>'Editar definições',
				'subscribe_template_title'=>'Editar definições do template',
				'subscribe_template_saved'=>'Definições do template guardadas',
				'language_active'=>'Língua activa',
				'reviews'=>'Activar formulário de comentários',
				'cookie_warning'=>'Apresentar aviso sobre os "cookies"',
				'privacy_policy'=>'Apresentar a política de privacidade',
				'edit_privacy_policy'=>'Editar política de privacidade',
				'show_news_categories'=>'Apresentar nome das categorias nas notícias',
				'show_news_categories_list'=>'Apresentar categorias em vez das notícias',
				'show_news_categories_images'=>'Apresentar imagens para as categorias',
				'show_consumer_complaints_resolution'=>'Apresentar info. de resolução de litígios',
				'show_complaints_book'=>'Apresentar info. do Livro de Reclamações',
				'layout' => 'Layout do site',
				'layout_edit' => 'Editar Layout',
				'lang_manage' => 'Línguas do site',
				'lang_manage_edit' => 'Editar Línguas'
			),
			'size'=>'Tamanho utilizado',
			'start_bg_color'=>'Cor de fundo inicial',
			'end_bg_color'=>'Cor de fundo final'
		),
		'site_image_resolution'=>array(//?p=site_image_resolution
			'title'=>'Alterar resoluções das imagens',
			'full'=>'Imagem Grande',
			'thumb'=>'Pré-visualização',
			'help'=>'Largura &times; Altura',
			'pages'=>array(
				'news'=>current(mysql_fetch_assoc(mysql_query('select title from pages where lang=(select id from lang where name="pt") and `group`=5'))),
				'portfolio'=>current(mysql_fetch_assoc(mysql_query('select title from pages where lang=(select id from lang where name="pt") and `group`=4'))),
				'slideshow'=>'Slideshow',
				'team'=>current(mysql_fetch_assoc(mysql_query('select title from pages where lang=(select id from lang where name="pt") and `group`=3')))
			),
			'js'=>array(
				'success'=>'Tamanho alterado',
				'too_large'=>'Resolução demasiado grande'
			)
		),
		'user'=>array(//?p=user
			'header'=>array(
				'details'=>'Detalhes do Utilizador',
				'password'=>'Alterar palavra-passe'
			),
			'fields'=>array(
				'level'=>array(
					'label'=>'Nível de acesso',
					'small'=>'Nível de permissões a aplicados',
					'level'=>'Nível'
				),
				'lang'=>array(
					'label'=>'Língua do backoffice',
					'small'=>'Língua utilizada para apresentar o backoffice'
				),
				'name'=>array(
					'label'=>'Nome completo',
					'small'=>''
				),
				'email'=>array(
					'label'=>'Email',
					'small'=>'Email do utilizador (não pode haver outro utilizador com este email)'
				),
				'current_password'=>array(
					'label'=>'Palavra-passe actual',
					'small'=>'Palavra-passe actualmente em uso nesta conta'
				),
				'new_password'=>array(
					'label'=>'Palavra-passe nova',
					'small'=>''
				),
				'new_password_confirm'=>array(
					'label'=>'Verificação da palavra-passe nova',
					'small'=>''
				)
			)
		),
		'administrators'=>array(//?p=administrators
			'header'=>array(
				'list'=>'Lista de administradores'
			),
			'table'=>array(
				'username'=>'Nome de utilizador',
				'email'=>'Email',
				'level'=>'Nível',
				'last_login'=>'Ultimo login',
				'n_logins'=>'Nº logins'
			)
		),
		'administrator_edit'=>array(//?p=administrator_edit
			'header'=>array(
				'details'=>'Detalhes do Utilizador',
				'password'=>'Alterar palavra-passe'
			),
			'fields'=>array(
				'active'=>array(
					'label'=>'Administrador activo',
					'small'=>''
				),
				'level'=>array(
					'label'=>'Nível de acesso',
					'small'=>'Nível de permissões a aplicados'
				),
				'lang'=>array(
					'label'=>'Língua do backoffice',
					'small'=>'Língua utilizada para apresentar o backoffice'
				),
				'username'=>array(
					'label'=>'Nome de utilizador',
					'small'=>'Nome de utilizador utilizado para aceder ao backoffice'
				),
				'name'=>array(
					'label'=>'Nome completo',
					'small'=>''
				),
				'email'=>array(
					'label'=>'Email',
					'small'=>'Email do utilizador (não pode haver outro utilizador com este email)'
				),
				'current_password'=>array(
					'label'=>'Palavra-passe actual',
					'small'=>'Palavra-passe actualmente em uso nesta conta'
				),
				'new_password'=>array(
					'label'=>'Palavra-passe nova',
					'small'=>''
				),
				'new_password_confirm'=>array(
					'label'=>'Verificação da palavra-passe nova',
					'small'=>''
				)
			)
		),
		'privacy_policy' => array(
			'title' => 'Editar Política de Privacidade',
			'desc' => 'Política de Privacidade em %s',
			'lang' => array(
				'pt' => 'Português',
				'en' => 'Inglês',
				'fr' => 'Francês'
			),
			'go_back' => 'Voltar',
			'save' => 'Guardar'
		),
	);
	
	$lista_niveis_acesso = '<p>
						* Níveis de acesso:
						<br>1- Apenas pode ver, não tem permissões para alterar.
						<br>2- Pode ver, ordenar, adicionar, eliminar, editar e publicar/despublicar.
						<br>3- Tem todas as permissões de nível 2, mas pode editar definições do site.
						<br>4- Tem todas as permissões do nível 3, mas pode adicionar, eliminar, editar, activar/desactivar outros administradores até nível 4 e editar as definições do site.
						'.(($_SESSION['adm_lvl']==5)?'<br>5- Tem controlo total sobre o site, todos os administradores e todas as definições.':'').'
					</p>';
?>