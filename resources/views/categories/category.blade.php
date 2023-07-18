<x-admin-layout>
<x-slot name="title">Kategori sayfası</x-slot>

<div class="container-fluid">
    <div class="row">
        <div class="card col-sm-12 col-sm-6 col-lg-5">
            <div class="card-body">
                <x-tree :catId="$category->id"/>
            </div>
        </div>

        <div class="card col-sm-12 col-sm-6 col-lg-7">
            <div class="card-body">
                <x-create-category-form :catId="$category->id"/>
            </div>
        </div>
    </div>
</div>
</x-admin-layout>
