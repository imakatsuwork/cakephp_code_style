<?php

// インデントはスペース4つ
const INDENT = "    ";
const LINE_ENDING = "\n";
// 挙動に影響を与える変更は無効にする
const IS_RISKY = false;
//
const RULES = array(
    // PRS2を標準にする
    '@PSR2' => true,
    'align_multiline_comment' => true,
    // 二項演算子のスペース
    'binary_operator_spaces' => array(
        'default' => 'single_space',
        'operators' => array(
            '=' => null // "=&"の二項演算子を正確に修正してくれないので暫定対応
        )
    ),
    // array()内のカンマの後に空白を入れる
    'whitespace_after_comma_in_array' => true,
    // array()内のカンマの前に空白を入れない
    'no_whitespace_before_comma_in_array' => true,
    // array()が一行のとき末尾にカンマを付けない
    'no_trailing_comma_in_singleline_array' => true,
    // array()内は先頭、末尾にスペースを入れない
    'trim_array_spaces' => true,
    // クラス内の要素の行間を1行だけ許容
    'class_attributes_separation' => false,
    'concat_space' => array(
        // 連結時にピリオド前後にスペースを開ける
        'spacing' => 'one'
    ),
    // no breakのコメントを入れない
    'no_break_comment' => false,
    // 複数行に跨る引数が渡される場合、引数毎に改行を入れる
    'method_argument_space' => array(
        'on_multiline' => 'ensure_fully_multiline'
    ),
    'array_indentation' => true,
    // 空白を除去する
    'no_whitespace_in_blank_line' => true,
    // インデント開始位置を揃える
    'phpdoc_indent' => true,
    // 縦線揃えない



    /** サンプルなので他のオプションも残しておく */
    // 'unary_operator_spaces' => true,
    // 'no_trailing_whitespace' => false,
    // 'array_syntax' => array('syntax' => 'short'),
    // 'combine_consecutive_unsets' => true,
    // 'method_separation' => false,
    // 'no_multiline_whitespace_before_semicolons' => true,
    // 'single_quote' => true,
    // 'blank_line_after_opening_tag' => true,
    // 'blank_line_before_return' => true,
    // 'braces' => array(
    //     'allow_single_line_closure' => true
    // ),
    // 'cast_spaces' => array(
    //     'space' => 'single'
    // ),
    // 'class_definition' => array('singleLine' => true),
    //     'declare_equal_normalize' => true,
    //     'function_typehint_space' => true,
    //     'hash_to_slash_comment' => true,
    //     'include' => true,
    //     'lowercase_cast' => true,
    // 'native_function_casing' => true,
    // 'new_with_braces' => true,
    // 'no_blank_lines_after_class_opening' => true,
    // 'no_blank_lines_after_phpdoc' => true,
    // 'no_empty_comment' => true,
    // 'no_empty_phpdoc' => true,
    // 'no_empty_statement' => true,
    //     'no_extra_consecutive_blank_lines' => array(
    //             'curly_brace_block',
    //             'extra',
    //             'parenthesis_brace_block',
    //             'square_brace_block',
    //             'throw',
    //             'use',
    //     ),
    // 'no_leading_import_slash' => true,
    // 'no_leading_namespace_whitespace' => true,
    // 'no_mixed_echo_print' => array('use' => 'echo'),
    //     'no_multiline_whitespace_around_double_arrow' => true,
    // 'no_short_bool_cast' => true,
    // 'no_singleline_whitespace_before_semicolons' => true,
    //     'no_spaces_around_offset' => true,
    // 'no_trailing_comma_in_list_call' => true,
    // 'no_unneeded_control_parentheses' => true,
    // 'no_unused_imports' => true,
    //     'no_whitespace_in_blank_line' => true,
    // 'normalize_index_brace' => true,
    //     'object_operator_without_whitespace' => true,
    // 'php_unit_fqcn_annotation' => true,
    // 'phpdoc_align' => true,
    // 'phpdoc_annotation_without_dot' => true,
    // 'phpdoc_indent' => true,
    // 'phpdoc_inline_tag' => true,
    // 'phpdoc_no_access' => true,
    // 'phpdoc_no_alias_tag' => true,
    // 'phpdoc_no_empty_return' => true,
    // 'phpdoc_no_package' => true,
    // 'phpdoc_no_useless_inheritdoc' => true,
    // 'phpdoc_return_self_reference' => true,
    // 'phpdoc_scalar' => true,
    // 'phpdoc_separation' => true,
    // 'phpdoc_single_line_var_spacing' => true,
    // 'phpdoc_summary' => true,
    // 'phpdoc_to_comment' => true,
    // 'phpdoc_trim' => true,
    // 'phpdoc_types' => true,
    // 'phpdoc_var_without_name' => true,
    // 'pre_increment' => true,
    // 'return_type_declaration' => true,
    // 'self_accessor' => true,
    // 'short_scalar_cast' => true,
    //     'single_blank_line_before_namespace' => true,
    // 'single_class_element_per_statement' => true,
    // 'space_after_semicolon' => true,
    // 'standardize_not_equals' => true,
    //     'ternary_operator_spaces' => true,
    // 'trailing_comma_in_multiline_array' => true,
    // 'trim_array_spaces' => false,


    // 'function_declaration' => [
    //     'closure_function_spacing' => 'one',
    // ],
    // 'indentation_type' => true,
);

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(IS_RISKY) // リスクのある書き換えは実行されない
    ->setUsingCache(false)
    ->setRules(RULES)
    ->setIndent(INDENT)
    ->setLineEnding(LINE_ENDING);