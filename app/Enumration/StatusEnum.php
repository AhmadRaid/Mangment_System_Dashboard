<?php


namespace App\Enumration;


use Spatie\Enum\Enum;

final class StatusEnum extends Enum
{
    const CompleteSharge = 'تم شحن الطلب';
    const prepareLoading = 'جاري التجهيز';
}
