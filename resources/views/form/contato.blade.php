

 {!! Form::open(['method' => 'POST', 'route' => 'contato.store', 'class' => 'contact-form']) !!}
    
 
    <div class="row">
        <div class="col-md-6">
            {!! Form::text('nome', NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=> 'Nome']) !!}
            {!! Form::text('email', NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=> 'Email']) !!}
                  
            
        </div>                
        <div class="col-md-6">
            {!! Form::textarea('text', NULL, ['class'=>'form-control', 'id'=>'message', 'placeholder'=> 'Mensagem']) !!}

            <button type="submit" class="btn btn-default submit-btn form_submit">Enviar Mensagem</button>
        </div>
    </div>
 {!! Form::close() !!}