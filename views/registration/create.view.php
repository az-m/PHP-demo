<?php require base_path('views/partials/head.php')?>
    <?php require base_path('views/partials/nav.php')?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register for a new account</h2>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form action="/register" method="POST" class="space-y-6">
                        <div>
                            <div class="mt-2">
                                <input id="email" type="email" name="email" required placeholder="joe@joe.com" class="block w-full rounded-t-md bg-yellow-100 px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border-gray-300 border-b-0" />
                                <input id="password" type="password" name="password" required class="block w-full rounded-b-md bg-yellow-100 px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border-gray-300" />
                                <?php if (isset($errors['email'])) : ?>
                                    <p class="text-red-500 text-sm mt-3"><?= $errors['email'] ?>
                                <?php endif ?>
                                <?php if (isset($errors['password'])) : ?>
                                    <p class="text-red-500 text-sm mt-3"><?= $errors['password'] ?>
                                <?php endif ?>
                            </div>
                             
                        </div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>

                    </form>
                </div>
            </div>
        </div>
    </main>
<?php require base_path('views/partials/footer.php')?>