<?php require('partials/head.php')?>
    <?php require('partials/nav.php')?>
    <?php require('partials/banner.php')?>
    <main>
        <div class="mx-auto mt-8 max-w-7xl py-6 sm:px-6 lg:px-8 bg-white rounded-md shadow">
            <form method="POST">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">
                    <div class="col-span-full">
                        <label for="body" class="block text-sm/6 font-medium text-white dark:text-black">New note</label>
                        <div class="mt-2">
                            <textarea 
                                id="body" 
                                name="body" 
                                rows="3" 
                                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white dark:text-gray-800 outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                            ><?= $_POST['body'] ?? '' ?></textarea>
                            <?php if (isset($errors['body'])) : ?>
                                <p class="text-red-500 text-sm mt-3"><?= $errors['body'] ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
        
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Create</button>
                </div>

            </form>
        </div>
    </main>
<?php require('partials/footer.php')?>