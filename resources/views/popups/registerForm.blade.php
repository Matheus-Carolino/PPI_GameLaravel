<form action="/register/user" method="POST">
    @csrf
    <div class="form-group mb-3 m-auto">
        <input type="text" class="form-control" name="name" id="nameId" placeholder="Name" required>
    </div>
    <div class="form-group mb-3 m-auto">
        <input type="email" class="form-control" name="email" id="emailId" placeholder="Email" required>
    </div>
    <div class="form-group mb-3 m-auto position-relative">
        <input type="password" class="form-control" name="password" id="passwordId" placeholder="Password" required>
        <span class="field-icon"><button class="bi bi-eye-fill text-white btn p-0 passwordShow" type="button"></button></span>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-success">Registrar-se</button>
    </div>
</form>