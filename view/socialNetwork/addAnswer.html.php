<div class="container text-center addpubli">
    <form action="index.php?ctrl=socialnetwork&action=replyTheComment&id=<?= $comment->getId() ?>" method="post"
        enctype="multipart">
        <div class="input-group mb-3">
            <input type="file" name="img" class="form-control" id="inputGroupFile02">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Ajoutez Votre Message</span>
            <textarea class="form-control" name="body" aria-label="Ajoutez Votre Message"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Envoyer votre message</button>
    </form>
</div>