<?php
/*
 * NGワードチェック
 * kojoma
 * 2015.03.31
 */
class ngword_check {

    /*
     * NGワードをチェックする
     * param : string $subject チェック対象の文字列
     *         string array $ngwords チェックするNGワードの配列
     * return: TRUE  NGワードは含まれていない
     *         FALSE NGワードが含まれている、引数エラー
     */
    public static function ngword_check($subject, $ngwords) {
        /*
         * 引数チェック
         * $subject: NULLでないこと
         *           1文字以上の文字列であること
         * $ngword:  NULLでないこと
         *           配列であること
         */
        if(!empty($subject)) {
            // 文字長チェック
            if(mb_strlen($subject) < 1) {
                return FALSE;
            }
        } else {
            return FALSE;
        }

        if(!empty($ngwords)) {
            // 配列チェック
            if(!is_array($ngwords)) {
                return FALSE;
            }
        } else {
            return FALSE;
        }

        // NGワードチェック処理
        str_replace($ngwords, $ngwords, $subject, $ng_count);
        if($ng_count == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
?>
