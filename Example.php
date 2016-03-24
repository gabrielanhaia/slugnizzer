<?php
class Example
{
    public function exampleSlugnizzer()
    {
        $slug = new Slugnizzer();

        // Sets the delimiter to separate the words slug . The default is a '-'
        $slug->setDelimiter('~');

        /* Sets characters to be replaced , it must be passed an array of keys and values
        where the key is the original character and the value is what will replac.*/
        $slug->setReplacements([
            'A' => 'c',
            'K' => 'm',
            '.' => ';'
        ]);

        /* Sets the character limit Slug if the string passed is greater than the defined,
         words will be cut . By default there is no set limit.*/
        $slug->setLimit(10);

        // Sets special characters belonging to other languages ​​will be translated into the Slug.
        $slug->setTranslate(true);

        // Sets the Slug will have all lowercase characters.
        $slug->setLowercase(true);

        // Generates a slug from the string passed as parameter.
        $test = $slug->generateSlug('Slug Value');

        // Generates a single slug according to a column in the database from the last strings for parameter.
        $test = $slug->generateSigleSlug('Slug Value', 'table_name', 'column_name');

        // Method Chain.
        $slug_string = $slug->setLowerCase(true)
            ->setLimit(12)
            ->setDelimiter('.')
            ->generateSigleSlug('Slug Value', 'table_name', 'column_name');
    }

    public function exampleSlugnizzerWithFacade()
    {
        //Generates a slug from the string passed as parameter.
        $test = Slugnizzer::generateSlug('Slug Value');

        //Generates a single slug according to a column in the database from the last strings for parameter.
        $test = Slugnizzer::generateSigleSlug('Slug Value', 'table_name', 'column_name');

        print_r($test);
    }

    public function exampleSlugnizzerWithServiceProvider()
    {
        $slug = App::make('slugnizzer');

        $test = $slug->generateSigleSlug('Slug Value', 'table_name', 'column_name');

        print_r($test);
    }

}