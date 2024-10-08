<?php include 'partials/header.view.php'; ?>

<main class="py-4">
    <div class="m-2  py-4 bg-gray-300 w-2/3 mx-auto">
        <h2 class="text-2xl underline">Update book</h2>
        <form class="m-2 grid grid-cols-2 gap-2 justify-center" action="update-book?id=<?=$book['id']?>" method="POST">
            <div>
                <label class="px-2" for="title">Title</label>
            </div>
            <div>
                <input class="px-2 text-sm" type="text" name="title" placeholder="title" value="<?=$book['title']?>">
            </div>
            <div>
                <label class="px-2" for="author">Author</label>
            </div>
            <div>   
            <input class="px-2 text-sm" type="text" name="author" placeholder="Author" value="<?=$book['author']?>">
            </div>
            <div>
                <label class="px-2" for="year">Year</label>
            </div>
            <div>   
            <input class="px-2 text-sm" type="text" name="year" placeholder="Year" value="<?=$book['year']?>">
            </div>
            <div class="col-span-2 mx-auto">
                <button class="bg-red-600 text-white px-3 py-1 rounded" type="submit">Update</button>
            </div>
    </form>
    </div>
    
</main>
<?php include 'partials/footer.view.php'; ?>
