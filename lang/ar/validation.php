<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول الحقل :attribute.',
    'accepted_if' => 'يجب قبول الحقل :attribute عندما يكون :other هو :value.',
    'active_url' => 'يجب أن يكون الحقل :attribute على شكل URL صالح.',
    'after' => 'يجب أن يكون الحقل :attribute على شكل تاريخ بعد :date.',
    'after_or_equal' => 'يجب أن يكون الحقل :attribute على شكل تاريخ بعد أو يساوي :date.',
    'alpha' => 'يجب أن يكون الحقل :attribute يحتوي فقط على أحرف.',
    'alpha_dash' => 'يجب أن يكون الحقل :attribute يحتوي فقط على أحرف وأرقام وشرطات وأسطر.',
    'alpha_num' => 'يجب أن يكون الحقل :attribute يحتوي فقط على أحرف وأرقام.',
    'any_of' => 'يجب أن يكون الحقل :attribute غير صالح.',
    'array' => 'يجب أن يكون الحقل :attribute على شكل مصفوفة.',
    'ascii' => 'يجب أن يكون الحقل :attribute يحتوي فقط على أحرف وأرقام ورموز.',
    'before' => 'يجب أن يكون الحقل :attribute على شكل تاريخ قبل :date.',
    'before_or_equal' => 'يجب أن يكون الحقل :attribute على شكل تاريخ قبل أو يساوي :date.',
    'between' => [
        'array' => 'يجب أن يكون الحقل :attribute يحتوي بين :min و :max عناصر.',
        'file' => 'يجب أن يكون الحقل :attribute يحتوي بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن يكون الحقل :attribute يحتوي بين :min و :max.',
        'string' => 'يجب أن يكون الحقل :attribute يحتوي بين :min و :max أحرف.',
    ],
    'boolean' => 'يجب أن يكون الحقل :attribute صحيح أو خطأ.',
    'can' => 'يجب أن يكون الحقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'يجب أن يكون الحقل :attribute مطابق للتأكيد.',
    'contains' => 'يجب أن يكون الحقل :attribute يحتوي على قيمة مطلوبة.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون الحقل :attribute على شكل تاريخ صالح.',
    'date_equals' => 'يجب أن يكون الحقل :attribute على شكل تاريخ مساوي للتاريخ :date.',
    'date_format' => 'يجب أن يكون الحقل :attribute يطابق الشكل :format.',
    'decimal' => 'يجب أن يكون الحقل :attribute يحتوي على :decimal منازل عشرية.',
    'declined' => 'يجب أن يكون الحقل :attribute غير مقبول.',
    'declined_if' => 'يجب أن يكون الحقل :attribute غير مقبول عندما يكون :other هو :value.',
    'different' => 'يجب أن يكون الحقل :attribute و :other مختلف.',
    'digits' => 'يجب أن يكون الحقل :attribute يحتوي على :digits رقم.',
    'digits_between' => 'يجب أن يكون الحقل :attribute يحتوي بين :min و :max رقم.',
    'dimensions' => 'يجب أن يكون الحقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'يجب أن يكون الحقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with' => 'يجب أن يكون الحقل :attribute لا ينتهي بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'يجب أن يكون الحقل :attribute لا يبدأ بأحد القيم التالية: :values.',
    'email' => 'يجب أن يكون الحقل :attribute على شكل بريد إلكتروني صالح.',
    'ends_with' => 'يجب أن يكون الحقل :attribute ينتهي بأحد القيم التالية: :values.',
    'enum' => 'الحقل :attribute غير صالح.',
    'exists' => 'الحقل :attribute غير صالح.',
    'extensions' => 'يجب أن يكون الحقل :attribute يحتوي على أحد الامتدادات التالية: :values.',
    'file' => 'يجب أن يكون الحقل :attribute على شكل ملف.',
    'filled' => 'يجب أن يكون الحقل :attribute يحتوي على قيمة.',
    'gt' => [
        'array' => 'يجب أن يكون الحقل :attribute يحتوي على أكثر من :value عناصر.',
        'file' => 'يجب أن يكون الحقل :attribute أكثر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون الحقل :attribute أكثر من :value.',
        'string' => 'يجب أن يكون الحقل :attribute أكثر من :value أحرف.',
    ],
    'gte' => [
        'array' => 'يجب أن يكون الحقل :attribute يحتوي على :value عناصر أو أكثر.',
        'file' => 'يجب أن يكون الحقل :attribute أكثر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون الحقل :attribute أكثر من أو يساوي :value.',
        'string' => 'يجب أن يكون الحقل :attribute أكثر من أو يساوي :value أحرف.',
    ],
    'hex_color' => 'يجب أن يكون الحقل :attribute على شكل لون هيكساديمال صالح.',
    'image' => 'يجب أن يكون الحقل :attribute على شكل صورة.',
    'in' => 'الحقل :attribute غير صالح.',
    'in_array' => 'يجب أن يكون الحقل :attribute موجود في :other.',
    'in_array_keys' => 'يجب أن يكون الحقل :attribute يحتوي على أحد المفاتيح التالية: :values.',
    'integer' => 'يجب أن يكون الحقل :attribute على شكل عدد صحيح.',
    'ip' => 'يجب أن يكون الحقل :attribute على شكل عنوان IP صالح.',
    'ipv4' => 'يجب أن يكون الحقل :attribute على شكل عنوان IP صالح.',
    'ipv6' => 'يجب أن يكون الحقل :attribute على شكل عنوان IP صالح.',
    'json' => 'يجب أن يكون الحقل :attribute على شكل سلسلة JSON صالحة.',
    'list' => 'يجب أن يكون الحقل :attribute على شكل قائمة.',
    'lowercase' => 'يجب أن يكون الحقل :attribute على شكل أحرف صغيرة.',
    'lt' => [
        'array' => 'يجب أن يكون الحقل :attribute يحتوي على أقل من :value عناصر.',
        'file' => 'يجب أن يكون الحقل :attribute أقل من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون الحقل :attribute أقل من :value.',
        'string' => 'يجب أن يكون الحقل :attribute أقل من :value أحرف.',
    ],
    'lte' => [
        'array' => 'يجب أن يكون الحقل :attribute لا يحتوي على أكثر من :value عناصر.',
        'file' => 'يجب أن يكون الحقل :attribute أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون الحقل :attribute أقل من أو يساوي :value.',
        'string' => 'يجب أن يكون الحقل :attribute أقل من أو يساوي :value أحرف.',
    ],
    'mac_address' => 'يجب أن يكون الحقل :attribute على شكل عنوان MAC صالح.',
    'max' => [
        'array' => 'يجب أن يكون الحقل :attribute لا يحتوي على أكثر من :max عناصر.',
        'file' => 'يجب أن يكون الحقل :attribute أقل من أو يساوي :max كيلوبايت.',
        'numeric' => 'يجب أن يكون الحقل :attribute أقل من أو يساوي :max.',
        'string' => 'يجب أن يكون الحقل :attribute أقل من أو يساوي :max أحرف.',
    ],
    'max_digits' => 'يجب أن يكون الحقل :attribute لا يحتوي على أكثر من :max رقم.',
    'mimes' => 'يجب أن يكون الحقل :attribute على شكل ملف من النوع: :values.',
    'mimetypes' => 'يجب أن يكون الحقل :attribute على شكل ملف من النوع: :values.',
    'min' => [
        'array' => 'يجب أن يكون الحقل :attribute يحتوي على على الأقل :min عناصر.',
        'file' => 'يجب أن يكون الحقل :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن يكون الحقل :attribute على الأقل :min.',
        'string' => 'يجب أن يكون الحقل :attribute على الأقل :min أحرف.',
    ],
    'min_digits' => 'يجب أن يكون الحقل :attribute يحتوي على على الأقل :min رقم.',
    'missing' => 'يجب أن يكون الحقل :attribute مفقود.',
    'missing_if' => 'يجب أن يكون الحقل :attribute مفقود عندما يكون :other هو :value.',
    'missing_unless' => 'يجب أن يكون الحقل :attribute مفقود إلا عندما يكون :other هو :value.',
    'missing_with' => 'يجب أن يكون الحقل :attribute مفقود عندما يكون :values موجود.',
    'missing_with_all' => 'يجب أن يكون الحقل :attribute مفقود عندما يكون :values موجود.',
    'multiple_of' => 'يجب أن يكون الحقل :attribute مضاعف للقيمة :value.',
    'not_in' => 'الحقل :attribute غير صالح.',
    'not_regex' => 'يجب أن يكون الحقل :attribute يطابق الشكل :format.',
    'numeric' => 'يجب أن يكون الحقل :attribute على شكل عدد.',
    'password' => [
        'letters' => 'يجب أن يكون الحقل :attribute يحتوي على على الأقل حرف واحد.',
        'mixed' => 'يجب أن يكون الحقل :attribute يحتوي على على الأقل حرف واحد واحد صغير واحد عددي واحد رمزي.',
        'numbers' => 'يجب أن يكون الحقل :attribute يحتوي على على الأقل عدد واحد.',
        'symbols' => 'يجب أن يكون الحقل :attribute يحتوي على على الأقل رمز واحد.',
        'uncompromised' => 'الحقل :attribute قد ظهر في فقدان البيانات. يرجى اختيار :attribute مختلف.',
    ],
    'present' => 'يجب أن يكون الحقل :attribute موجود.',
    'present_if' => 'يجب أن يكون الحقل :attribute موجود عندما يكون :other هو :value.',
    'present_unless' => 'يجب أن يكون الحقل :attribute موجود إلا عندما يكون :other هو :value.',
    'present_with' => 'يجب أن يكون الحقل :attribute موجود عندما يكون :values موجود.',
    'present_with_all' => 'يجب أن يكون الحقل :attribute موجود عندما يكون :values موجود.',
    'prohibited' => 'يجب أن يكون الحقل :attribute محظور.',
    'prohibited_if' => 'يجب أن يكون الحقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_if_accepted' => 'يجب أن يكون الحقل :attribute محظور عندما يكون :other مقبول.',
    'prohibited_if_declined' => 'يجب أن يكون الحقل :attribute محظور عندما يكون :other مرفوض.',
    'prohibited_unless' => 'يجب أن يكون الحقل :attribute محظور إلا عندما يكون :other في :values.',
    'prohibits' => 'يجب أن يكون الحقل :attribute محظور :other من أن يكون موجود.',
    'regex' => 'يجب أن يكون الحقل :attribute يطابق الشكل :format.',
    'required' => 'يجب أن يكون الحقل :attribute مطلوب.',
    'required_array_keys' => 'يجب أن يكون الحقل :attribute يحتوي على عناصر للقيم: :values.',
    'required_if' => 'يجب أن يكون الحقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_if_accepted' => 'يجب أن يكون الحقل :attribute مطلوب عندما يكون :other مقبول.',
    'required_if_declined' => 'يجب أن يكون الحقل :attribute مطلوب عندما يكون :other مرفوض.',
    'required_unless' => 'يجب أن يكون الحقل :attribute مطلوب إلا عندما يكون :other في :values.',
    'required_with' => 'يجب أن يكون الحقل :attribute مطلوب عندما يكون :values موجود.',
    'required_with_all' => 'يجب أن يكون الحقل :attribute مطلوب عندما يكون :values موجود.',
    'required_without' => 'يجب أن يكون الحقل :attribute مطلوب عندما يكون :values غير موجود.',
    'required_without_all' => 'يجب أن يكون الحقل :attribute مطلوب عندما لا يكون :values موجود.',
    'same' => 'يجب أن يكون الحقل :attribute مطلوق :other.',
    'size' => [
        'array' => 'يجب أن يكون الحقل :attribute يحتوي على :size عناصر.',
        'file' => 'يجب أن يكون الحقل :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن يكون الحقل :attribute :size.',
        'string' => 'يجب أن يكون الحقل :attribute :size أحرف.',
    ],
    'starts_with' => 'يجب أن يكون الحقل :attribute يبدأ بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون الحقل :attribute على شكل سلسلة.',
    'timezone' => 'يجب أن يكون الحقل :attribute على شكل وقت صالح.',
    'unique' => 'الحقل :attribute مستخدم من قبل.',
    'uploaded' => 'يفشل الحقل :attribute في التحميل.',
    'uppercase' => 'يجب أن يكون الحقل :attribute على شكل أحرف كبيرة.',
    'url' => 'يجب أن يكون الحقل :attribute على شكل URL صالح.',
    'ulid' => 'يجب أن يكون الحقل :attribute على شكل ULID صالح.',
    'uuid' => 'يجب أن يكون الحقل :attribute على شكل UUID صالح.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة خاصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
