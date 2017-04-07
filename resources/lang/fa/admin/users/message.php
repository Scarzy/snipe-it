<?php

return array(

    'accepted'                  => 'دارایی با موفقیت پذیرفته شد.',
    'declined'                  => 'شما با موفقیت این دارایی را به کاهش دادید.',
    'bulk_manager_warn'	        => 'Your users have been successfully updated, however your manager entry was not saved because the manager you selected was also in the user list to be edited, and users may not be their own manager. Please select your users again, excluding the manager.',
    'user_exists'               => 'کاربر "{0}" در حال حاضر وجود دارد.',
    'user_not_found'            => 'کاربر [:id] موجود نیست.',
    'user_login_required'       => 'فیلد ورود الزامی است.',
    'user_password_required'    => 'کلمه عبور ضروری است.',
    'insufficient_permissions'  => 'دسترسی محدود',
    'user_deleted_warning'      => 'این کاربر حذف شده است.شما باید این کاربر را بازگردانی و آنها را ویرایش و دارایی به آنها اختصاص دهید.',
    'ldap_not_configured'        => 'LDAPبرای این نصب و راه اندازی پیکربندی نشده است.',


    'success' => array(
        'create'    => 'کاربر با موفقیت ایجاد شد.',
        'update'    => 'کاربر با موفقیت به روز شد.',
        'update_bulk'    => 'Users were successfully updated!',
        'delete'    => 'کاربر با موفقیت حذف شد.',
        'ban'       => 'کاربر با موفقیت متوقف شد.',
        'unban'     => 'محرومیت کاربر با موفقیت متوقف شد.',
        'suspend'   => 'کاربر با موفقیت معلق شد.',
        'unsuspend' => 'تعلیق کاربر با موفقیت متوقف شد.',
        'restored'  => 'کابر با موفقیت بازگردانی شد.',
        'import'    => 'کاربران با موفقیت وارد شدند.',
    ),

    'error' => array(
        'create' => 'اشکال در ایجاد کاربر.لطفا دوباره تلاش کنید.',
        'update' => 'اشکال در به روزرسانی کاربر.لطفا دوباره تلاش کنید.',
        'delete' => 'اشکال در حذف کاربر.لطفا دوباره تلاش کنید.',
        'unsuspend' => 'اشکال در به رفع تعلیق کاربر.لطفا دوباره تلاش کنید.',
        'import'    => 'اشکال در به وارد کردن کاربران.لطفا دوباره تلاش کنید.',
        'asset_already_accepted' => 'دارایی پذیرفته شده است.',
        'accept_or_decline' => 'شما باید این دارایی را قبول یا رد کنید.',
        'incorrect_user_accepted' => 'دارایی که میخواهید قبول یا رد کنید به شما محول نشده.',
        'ldap_could_not_connect' => 'ارتباط با سرور LDAP برقرار نشد.لطفا پیکربندی LDPA سرور را در فایل LDPA config بررسی کنید.<br>اشکال از سرور LDPA:',
        'ldap_could_not_bind' => 'ارتباط با سرور LDAP برقرار نشد.لطفا پیکربندی LDPA سرور را در فایل LDPA config بررسی کنید.<br>اشکال از سرور LDPA:',
        'ldap_could_not_search' => 'جستجو در سرور LDPA انجام نشد.لطفا پیکربندی LDPA سرور را در فایل LDPA config بررسی کنید.<br>اشکال از سرور LDPA:',
        'ldap_could_not_get_entries' => 'مجوز از سرور LDPA گرفته نشد.لطفا پیکربندی LDPA سرور را در فایل LDPA config بررسی کنید.<br>اشکال از سرور LDPA:',
    ),

    'deletefile' => array(
        'error'   => 'فایل حذف نشد.لطفا دوباره تلاش کنید.',
        'success' => 'نقش با موفقیت حذف شد.',
    ),

    'upload' => array(
        'error'   => 'فایل(ها) بارگذاری نشدند.لطفا دوباره تلاش کنید.',
        'success' => 'فایل(ها) با موفقیت بارگذاری شدند.',
        'nofiles' => 'شما هیچ فایلی برای بارگذاری انتخاب نکرده اید.',
        'invalidfiles' => 'یک یا چندی از فایل های شما با پسوند غیرمجاز هستند.پسوند های مجاز شامل:png, gif, jpg, doc, docx, pdf و text می باشند.',
    ),

);
