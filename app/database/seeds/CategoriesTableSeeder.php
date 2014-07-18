<?php

class CategoriesTableSeeder extends Seeder {

    public function run() {

            DB::table('categories')->delete();

            for ($i = 1; $i < 10; $i++) {

                $categories = new Category();

                $categories->name = "Category $i";
                $categories->save();

            }

    }
}
