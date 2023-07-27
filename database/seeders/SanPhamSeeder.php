<?php

namespace Database\Seeders;

use App\Models\SanPham;
use Illuminate\Database\Seeder;


class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        SanPham::create([
            'ten_sanpham' => 'NMD R2',
            'id_loai' => 1,
            'id_gian_hang' => 1,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1200000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay13.jpg',
            'hinh_anh_2' => 'giay13.jpg',
            'hinh_anh_3' => 'giay13.jpg',
            'hinh_anh_4' => 'giay13.jpg',
            'created_at' => '2021-11-25 14:59:26',
            'updated_at' => '2021-11-25 14:59:26',
        ]);

       

        SanPham::create([
            'ten_sanpham' => 'Nike Joma IC',
            'id_loai' => 2,
            'id_gian_hang' => 2,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay4.jpg',
            'hinh_anh_2' => 'giay4.jpg',
            'hinh_anh_3' => 'giay4.jpg',
            'hinh_anh_4' => 'giay4.jpg',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);

        SanPham::create([
            'ten_sanpham' => 'The Nike Premier II',
            'id_loai' => 3,
            'id_gian_hang' => 2,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '999000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay3.jpg',
            'hinh_anh_2' => 'giay3.jpg',
            'hinh_anh_3' => 'giay3.jpg',
            'hinh_anh_4' => 'giay3.jpg',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Adidas PUREBOOST 21',
            'id_loai' => 2,
            'id_gian_hang' => 3,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1590000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay20.jpg',
            'hinh_anh_2' => 'giay20.jpg',
            'hinh_anh_3' => 'giay20.jpg',
            'hinh_anh_4' => 'giay20.jpg',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Adidas STAN SMITH',
            'id_loai' => 2,
            'id_gian_hang' => 3,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1290000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay21.jpg',
            'hinh_anh_2' => 'giay21.jpg',
            'hinh_anh_3' => 'giay21.jpg',
            'hinh_anh_4' => 'giay21.jpg',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
        ]);
        
        SanPham::create([
            'ten_sanpham' => 'Adidas ALPHAMAGMA',
            'id_loai' => 2,
            'id_gian_hang' => 3,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '799000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay22.jpg',
            'hinh_anh_2' => 'giay22.jpg',
            'hinh_anh_3' => 'giay22.jpg',
            'hinh_anh_4' => 'giay22.jpg',
            'created_at' => '2021-12-01 17:21:31',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Adidas RUNFALCON 2.0',
            'id_loai' => 2,
            'id_gian_hang' => 3,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '599000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay23.jpg',
            'hinh_anh_2' => 'giay23.jpg',
            'hinh_anh_3' => 'giay23.jpg',
            'hinh_anh_4' => 'giay23.jpg',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);
        
        SanPham::create([
            'ten_sanpham' => 'Adidas Tiempo Legend 9',
            'id_loai' => 2,
            'id_gian_hang' => 3,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay2.jpg',
            'hinh_anh_2' => 'giay2.jpg',
            'hinh_anh_3' => 'giay2.jpg',
            'hinh_anh_4' => 'giay2.jpg',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);

        


        SanPham::create([
            'ten_sanpham' => 'Puma One 5.3 TT',
            'id_loai' => 2,
            'id_gian_hang' => 2,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '699000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay7.jpg',
            'hinh_anh_2' => 'giay7.jpg',
            'hinh_anh_3' => 'giay7.jpg',
            'hinh_anh_4' => 'giay7.jpg',
            'created_at' => '2021-12-01 17:21:31',
        ]);


        SanPham::create([
            'ten_sanpham' => 'CNVR-WZ87_V1',
            'id_loai' => 3,
            'id_gian_hang' => 1,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '699000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay16.jpg',
            'hinh_anh_2' => 'giay16.jpg',
            'hinh_anh_3' => 'giay16.jpg',
            'hinh_anh_4' => 'giay16.jpg',
            'created_at' => '2021-12-01 17:21:31',
        ]);


        SanPham::create([
            'ten_sanpham' => 'Run Star Hike Sneaker',
            'id_loai' => 3,
            'id_gian_hang' => 1,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '966000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay17.jpg',
            'hinh_anh_2' => 'giay17.jpg',
            'hinh_anh_3' => 'giay17.jpg',
            'hinh_anh_4' => 'giay17.jpg',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Chuck 70 Sneaker',
            'id_loai' => 3,
            'id_gian_hang' => 1,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1280000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay18.jpg',
            'hinh_anh_2' => 'giay18.jpg',
            'hinh_anh_3' => 'giay18.jpg',
            'hinh_anh_4' => 'giay18.jpg',
            'created_at' => '2021-12-01 17:21:31',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Archive Paint Splatter',
            'id_loai' => 3,
            'id_gian_hang' => 1,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1880000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay19.jpg',
            'hinh_anh_2' => 'giay19.jpg',
            'hinh_anh_3' => 'giay19.jpg',
            'hinh_anh_4' => 'giay19.jpg',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Nike Top Sala14',
            'id_loai' => 2,
            'id_gian_hang' => 2,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay9.jpg',
            'hinh_anh_2' => 'giay9.jpg',
            'hinh_anh_3' => 'giay9.jpg',
            'hinh_anh_4' => 'giay9.jpg',
            'created_at' => '2021-11-25 14:59:26',
            'updated_at' => '2021-11-25 14:59:26',
        ]);
        
        SanPham::create([
            'ten_sanpham' => 'Nike ACE Tango',
            'id_loai' => 2,
            'id_gian_hang' => 2,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '599000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay6.jpg',
            'hinh_anh_2' => 'giay6.jpg',
            'hinh_anh_3' => 'giay6.jpg',
            'hinh_anh_4' => 'giay6.jpg',
            'created_at' => '2021-12-01 17:21:31',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Nike FC',
            'id_loai' => 2,
            'id_gian_hang' => 2,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1100000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay8.jpg',
            'hinh_anh_2' => 'giay8.jpg',
            'hinh_anh_3' => 'giay8.jpg',
            'hinh_anh_4' => 'giay8.jpg',
            'created_at' => '2021-12-01 17:21:31',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Adidas X Tango 17.1 FG',
            'id_loai' => 3,
            'id_gian_hang' => 3,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay5.jpg',
            'hinh_anh_2' => 'giay5.jpg',
            'hinh_anh_3' => 'giay5.jpg',
            'hinh_anh_4' => 'giay5.jpg',
            'created_at' => '2021-12-01 17:21:31',
        ]);
        

        SanPham::create([
            'ten_sanpham' => 'Superstar KB',
            'id_loai' => 2,
            'id_gian_hang' => 2,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1350000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay10.jpg',
            'hinh_anh_2' => 'giay10.jpg',
            'hinh_anh_3' => 'giay10.jpg',
            'hinh_anh_4' => 'giay10.jpg',
            'created_at' => '2021-12-01 17:21:31',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Superstar J',
            'id_loai' => 1,
            'id_gian_hang' => 2,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1290000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay11.jpg',
            'hinh_anh_2' => 'giay11.jpg',
            'hinh_anh_3' => 'giay11.jpg',
            'hinh_anh_4' => 'giay11.jpg',
            'created_at' => '2021-11-25 14:59:26',
            'updated_at' => '2021-11-25 14:59:26',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Nike Tiempo Legend',
            'id_loai' => 2,
            'id_gian_hang' => 2,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1990000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay4.jpg',
            'hinh_anh_2' => 'giay4.jpg',
            'hinh_anh_3' => 'giay4.jpg',
            'hinh_anh_4' => 'giay4.jpg',
            'created_at' => '2021-11-24 14:59:26',
            'updated_at' => '2021-11-24 14:59:26',
        ]);

        SanPham::create([
            'ten_sanpham' => 'ADIDAS X Speedflow',
            'id_loai' => 2,
            'id_gian_hang' => 3,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay12.jpg',
            'hinh_anh_2' => 'giay12.jpg',
            'hinh_anh_3' => 'giay12.jpg',
            'hinh_anh_4' => 'giay12.jpg',
            'created_at' => '2021-12-01 17:21:31',
        ]);


        SanPham::create([
            'ten_sanpham' => 'Jung 96',
            'id_loai' => 2,
            'id_gian_hang' => 3,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '899000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay14.jpg',
            'hinh_anh_2' => 'giay14.jpg',
            'hinh_anh_3' => 'giay14.jpg',
            'hinh_anh_4' => 'giay14.jpg',
            'created_at' => '2021-12-01 17:21:31',
        ]);

        SanPham::create([
            'ten_sanpham' => 'Mercurial Superfly',
            'id_loai' => 3,
            'id_gian_hang' => 1,
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay6.jpg',
            'hinh_anh_2' => 'giay6.jpg',
            'hinh_anh_3' => 'giay6.jpg',
            'hinh_anh_4' => 'giay6.jpg',
            'created_at' => '2021-11-24 14:59:26',
            'updated_at' => '2021-11-24 14:59:26',
        ]);
    }
}
