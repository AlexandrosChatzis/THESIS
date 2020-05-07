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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
            'rule-name' => 'custom-message',
        ],
        'myFile1' =>[
            'required'=> 'ΤΗΝ ΑΙΤΗΣΗ ΣΙΤΙΣΗΣ',
            'mimes'=>'ΤΗΝ ΑΙΤΗΣΗ ΣΙΤΙΣΗΣ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΤΗΝ ΑΙΤΗΣΗ ΣΙΤΙΣΗΣ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],

        'myFile2' =>[
            'required'=> 'ΤΗΝ ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ',
            'mimes'=>'ΤΗΝ ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΤΗΝ ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],

        'myFile3' =>[
            
            'mimes'=>'ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΑΤΟΜΙΚΟ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΑΤΟΜΙΚΟ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],
        'myFile4' =>[
            'required'=> 'ΤΟ ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΟΙΚΟΓΕΝΕΙΑΚΟ',
            'mimes'=>'ΤΟ ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΟΙΚΟΓΕΝΕΙΑΚΟ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΤΟ ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΟΙΚΟΓΕΝΕΙΑΚΟ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],
        'myFile5' =>[
            
            'mimes'=>'ΒΕΒΑΙΩΣΗ ΣΠΟΥΔΩΝ ΑΔΕΛΦΟΥ/ΗΣ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΒΕΒΑΙΩΣΗ ΣΠΟΥΔΩΝ ΑΔΕΛΦΟΥ/ΗΣ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],
        'myFile6' =>[
            'required'=> 'ΤΟ ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΟΙΚΟΓΕΝΕΙΑΚΗΣ ΚΑΤΑΣΤΑΣΗΣ',
            'mimes'=>'ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΟΙΚΟΓΕΝΕΙΑΚΗΣ ΚΑΤΑΣΤΑΣΗΣ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΟΙΚΟΓΕΝΕΙΑΚΗΣ ΚΑΤΑΣΤΑΣΗΣ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],
        'myFile7' =>[
            'mimes'=>'ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΑΝΩΤΑΤΗΣ ΣΥΝΟΜΟΣΠΟΝΔΙΑΣ ΠΟΛΥΤΕΚΝΩΝ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΑΝΩΤΑΤΗΣ ΣΥΝΟΜΟΣΠΟΝΔΙΑΣ ΠΟΛΥΤΕΚΝΩΝ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],
        'myFile8' =>[
           
            'mimes'=>'ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΥΓΕΙΟΝΟΜΙΚΗΣ ΕΠΙΤΡΟΠΗΣ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΥΓΕΙΟΝΟΜΙΚΗΣ ΕΠΙΤΡΟΠΗΣ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],
        'myFile9' =>[
            
            'mimes'=>'ΛΗΞΙΑΡΧΙΚΗ ΠΡΑΞΗ ΘΑΝΑΤΟΥ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΛΗΞΙΑΡΧΙΚΗ ΠΡΑΞΗ ΘΑΝΑΤΟΥ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],
        'myFile10' =>[
           
            'mimes'=>'ΔΙΑΖΕΥΚΤΗΡΙΟ Ή ΙΔΙΩΤΙΚΟ ΣΥΜΦΩΝΗΤΙΚΟ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΔΙΑΖΕΥΚΤΗΡΙΟ Ή ΙΔΙΩΤΙΚΟ ΣΥΜΦΩΝΗΤΙΚΟ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],
        'myFile11' =>[
            
            'mimes'=>'ΠΡΟΣΦΑΤΗ ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ ΓΟΝΕΑ ΓΙΑ ΕΞΟΔΑ ΕΠΙΒΑΡΥΝΣΗΣ διότι δεχόμαστε μόνο αρχεία pdf',
            'max'=> 'ΠΡΟΣΦΑΤΗ ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ ΓΟΝΕΑ ΓΙΑ ΕΞΟΔΑ ΕΠΙΒΑΡΥΝΣΗΣ διότι το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ],
        'fielddelete' =>[
            
            'numeric'=>'ΠΡΕΠΕΙ ΝΑ ΒΑΛΕΤΕ ΑΡΙΘΜΟ ID ΣΤΟ ΠΕΔΙΟ ΤΗΣ ΔΙΑΓΡΑΦΗΣ'
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
