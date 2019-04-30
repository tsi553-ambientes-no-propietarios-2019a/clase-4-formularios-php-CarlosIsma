<? php
  function acceso ( $ usu , $ pass )
  {
    if ( $ usu ! = $ pass )
	  echo  "Claves Distintas" ;
  }
  
  acceso ( $ _REQUEST [ ' user ' ], $ _REQUEST [ 'password' ]);
$ pass  =  array (
	'carlos'  =>  'lucero' ,
	'diana'  =>  '12345' ,
	'victor'  =>  'espin' ,
	'juan'  =>  '11111' ,
	'admin'  =>  'admin'
);
echo  $ pass [ ' carlos ' ];
? >