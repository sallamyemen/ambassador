<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 *
 * @property int id
 * @property string locale
 * @property string name
 * @property string url
 */
class Lang extends ActiveRecord
{
    /**
     * Переменная, для хранения текущего объекта языка
     */
    static $current = null;

    public static function getDefaultLocale(): string
    {
        return Yii::$app->sourceLanguage;
    }

    public static function getAll(): array
    {
        return [
            (object) [
                'id' => 1,
                'locale' => 'en-US',
                'name' => 'En',
                'url' => 'en',
            ],
            (object) [
                'id' => 2,
                'locale' => 'de-DE',
                'name' => 'De',
                'url' => 'de',
            ],
            (object) [
                'id' => 3,
                'locale' => 'vi-VN',
                'name' => 'Vi',
                'url' => 'vi',
            ],
            (object) [
                'id' => 4,
                'locale' => 'ru-RU',
                'name' => 'Ru',
                'url' => 'ru',
            ],
        ];
    }

    /**
     * Получение текущего объекта языка
     */
    public static function getCurrent(): ?object
    {
        if (self::$current === null) {
            self::$current = self::getDefaultLang();
        }
        return self::$current;
    }

    /**
     * Установка текущего объекта языка и локаль пользователя
     */
    public static function setCurrent($url = null)
    {
        $language = self::getLangByUrl($url);
        self::$current = $language === null ? self::getDefaultLang() : $language;
        Yii::$app->language = self::$current->locale;
    }

    /**
     * Получения объекта языка по умолчанию
     */
    public static function getDefaultLang(): object
    {
        return self::getAll()[0];
    }

    /**
     * Получения объекта языка по буквенному идентификатору
     */
    public static function getLangByUrl($url = null)
    {
        if ($url === null) {
            return null;
        } else {
            $language = null;
            foreach (self::getAll() as $val) {
                if ($val->url === $url) {
                    $language = $val;
                    break;
                }
            }

            return $language === null ? null : $language;
        }
    }
}
