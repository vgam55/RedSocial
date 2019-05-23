    <div class="row my-5 border border border-primary p-3" id="friends" name="friends">
       @section ('adiskideak')
        
       @show 
        <script src="js/amigos.js"></script>   
    </div>
    <div class="row my-5 border border border-primary p-3" id="chat" name="chat">
        @include('partials.contenido.chat')
    </div>