<?php

namespace App\Helpers;


class Helper
{
    public static function getShopStatus(int $status)
    {
        $result = '<div class="btn btn-warning btn-rounded">Đang chờ duyệt</div>';
        switch ($status) {
            case 0:
                $result = '<div class="btn btn-warning btn-rounded">Đang chờ duyệt</div>';
                break;
            case 1:
                $result = '<div class="btn btn-success btn-rounded">Đang hoạt động</div>';
                break;
            case 2:
                $result = '<div class="btn btn-danger btn-rounded">Đang tạm dừng</div>';
                break;
        }

        return $result;
    }

    public static function getOrderStatus(int $status)
    {
        $result = '<div class="btn btn-warning btn-rounded">Đang chờ duyệt</div>';
        switch ($status) {
            case 0:
                $result = '<div class="btn btn-warning btn-rounded">Đang chờ duyệt</div>';
                break;
            case 1:
                $result = '<div class="btn btn-success btn-rounded">Đang giao</div>';
                break;
            case 2:
                $result = '<div class="btn btn-danger btn-rounded">Đã hủy</div>';
                break;
        }

        return $result;
    }
}
