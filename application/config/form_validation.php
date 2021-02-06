<?php 
	
 
	
	$config=[

      'add_news_post' =>[
                                [
										'field' => 'title',
										'label' => 'Title',
										'rules' => 'required'

									],
									[
										'field' => 'description',
										'label' => 'Description',
										'rules' => 'required'

									] 
									
                        ],
    
    'add_news_paper' =>[
                                [
										'field' => 'newspaper_date',
										'label' => 'Date',
										'rules' => 'required'

									]
								 
									
                        ],
    
      'contact_us' =>[
                                [
										'field' => 'name',
										'label' => 'Name',
										'rules' => 'required'

									],
									[
										'field' => 'email',
										'label' => 'Email',
										'rules' => 'required'

									] ,
									[
										'field' => 'message',
										'label' => 'Message',
										'rules' => 'required'

									] 
									
                        ]                    
]

?>