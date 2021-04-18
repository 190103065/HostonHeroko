<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => 'Aqua Super MZ 407 M (1л)',
           'description' => 'Биоразлагаемое моторное масло для высокоскоростных 2-х тактных подвесных лодочных двигателей высокой мощности с воздушным и водяным охлаждением. Защищает от износа и отложений в цилиндропоршневой группе, от выхода из строя свеч зажигания, преждевременного зажигания и засорения системы выхлопа, гарантирует превосходную защиту от морской воды. Соотношение масла к топливу: не менее 1:60 согласно предписаниям производителя. API TC, JASO FC, NMMA TC-W3.',
           'photo' => 'https://inomarca.kz/images/shop/catalog-images/7/11/9b/119bd52062c0246257fcd0ec0b8f1902.jpg',
           'price' => 698.88
        ]);
        DB::table('products')->insert([
            'name' => 'Extra Power MV 0538 LE 5W-30, 1л',
            'description' => 'Синтетическое топливосберегающее моторное масло (Low SAPS) для поколения ультрасовременных бензиновых и дизельных двигателей Euro IV с фильтром тонкой очистки и накопительным катализатором NOX. VW/AUDI 502 00, VW/AUDI 505 00, MB 229.31, BMW Longlife-04, Renault RN0700. ACEA C3, API SN/CF.',
            'photo' => 'https://inomarca.kz/images/shop/catalog-images/7/e5/a8/e5a872704d45c7fa661a94abd9f9d92d.jpg',
            'price' => 983.00
        ]);
        DB::table('products')->insert([
            'name' => 'Extra Power MV 0538 LE 5W-30, 5л',
            'description' => 'Синтетическое топливосберегающее моторное масло (Low SAPS) для поколения ультрасовременных бензиновых и дизельных двигателей Euro IV с фильтром тонкой очистки и накопительным катализатором NOX. VW/AUDI 502 00, VW/AUDI 505 00, MB 229.31, BMW Longlife-04, Renault RN0700. ACEA C3, API SN/CF.',
            'photo' => 'https://inomarca.kz/images/shop/catalog-images/7/bc/bb/bcbbe077e03672f38b53fc30865f577a.jpg',
            'price' => 675.00
        ]);
        DB::table('products')->insert([
            'name' => 'LG V10 H900',
            'description' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
            'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
            'price' => 159.99
        ]);
        DB::table('products')->insert([
            'name' => 'Giga Light (Motorenol) MV 0530 LL 5W-30, 1л',
            'description' => 'Высокотехнологичное энергосберегающее полностью синтетическое моторное масло Longlife III класса Low SAPS. Особо рекомендуется для двигателей EURO IV/V, автомобилей с продленными интервалами технического обслуживания (WIV), оснащенных сажевых частиц (DPF) и катализатором. Также рекомендуется для газовых двигателей, функционирующих на природном (CNG) и сжиженном (LPG) газе. Соответствует или полностью заменяет: VW/AUDI 502 00, VW/AUDI 505 00, MB 229.51, BMW Longlife-04, Porsche C30.',
            'photo' => 'https://inomarca.kz/images/shop/catalog-images/7/88/59/88595b57c894d9b4a978cdad11062292.jpg',
            'price' => 68.00
        ]);
        DB::table('products')->insert([
            'name' => 'Mega Light MV 039 0W-30, 1л',
            'description' => 'Специальное полностью синтетическое моторное масло для автомобилей Volkswagen Audi Group, для удлиненных интервалов обслуживания (WIV) — до 30000 км для бензиновых двигателей и до 50000 км для дизельных двигателей, а также для двигателей TDI c системой впрыска насос-форсунка. Создано на основе высококачественных синтетических базовых масел и присадок, изготовленных по новейшей технологии. Характеризуется пониженной вязкостью HTHS.VW/AUDI 503 00, VW/AUDI 506 00, VW/AUDI 506 01. ACEA A5/B5.',
            'photo' => 'https://inomarca.kz/images/shop/catalog-images/7/34/09/340906ef68f7888651490d4b3798ec70.jpg',
            'price' => 129.99
        ]);
    }
}
