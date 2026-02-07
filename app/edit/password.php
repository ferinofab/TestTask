
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32" aria-hidden="true">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Изменение пароля</span>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>
</div>

<div class="d-flex align-items-center justify-content-center vh-100 bg-body-tertiary">
    <main class="form-signin w-100 m-auto" style="max-width: 330px;">
        <form action="../Controllers/EditPersonalControlelr" method="post">
            <h1 class="h3 mb-3 fw-normal text-center">Изменение</h1>
            <input type="hidden" name="id" value="<?=$_GET['id'] ?>">

            <div class="form-floating mb-2">
                <input type="password" name="old_password" class="form-control" id="floatingInput">
                <label for="floatingInput">Старый пароль</label>
            </div>

            <div class="form-floating mb-2">
                <input  type="password" name="new_password" class="form-control" id="floatingInput" required>
                <label for="floatingInput">Новый пароль</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" name="rep_password" class="form-control" id="floatingPassword" required>
                <label for="floatingPassword">Повтор пароля</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit"name="update_password">Изменить</button>
        </form>
    </main>
</div>

<div class="container">
    <footer class="py-5">
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
                <div id="extwaiokist" style="display:none" v="pdbbg" q="97fc9ec3" c="161.8" i="233" u="4.227" s="01312606" sg="svr_01112622-ga_01312606-bai_01252620" d="1" w="false" e="" a="2" m="BMe=" vn="1gtra">
                    <div id="extwaigglbit" style="display:none" v="pdbbg" q="97fc9ec3" c="161.8" i="233" u="4.227" s="01312606" sg="svr_01112622-ga_01312606-bai_01252620" d="1" w="false" e="" a="2" m="BMe=">

                    </div>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>
            <div class="col-md-5 offset-md-1 mb-3">
                <form> <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="email" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© 2025 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex"> <li class="ms-3"><a class="link-body-emphasis" href="#" aria-label="Instagram">
                        <svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="link-body-emphasis" href="#" aria-label="Facebook">
                        <svg class="bi" width="24" height="24" aria-hidden="true"><use xlink:href="#facebook"></use></svg>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>