<x-mail::message>
    #Correo por aprovar 

<x-mail::panel>Se ha creado un post que necesita ser aprovado</x-mail::panel>
 

<x-mail::button :url="route('post.show'), $post"
    color="success">
ClIck para aprobar el post
</x-mail::button>
 
</x-mail::message>