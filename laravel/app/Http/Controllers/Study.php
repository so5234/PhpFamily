<?php
/**
 * 定义Documentable接口
 * user: Liu
 * time: 2020 2 22
 */

interface Documentable
{
    public function getID();

    public function getContent();

}
?>

<?php
/**
 * 这里是性状的实现
 */
trait MyTrait
{
    //这里是性状的实现
}
?>

<?php
/**
 * 定义Geocodable性状
 */
trait Geocodable
{
    protected $address;

    protected $geocoder;

    protected $geocoderResult;

    public function setGeocoder()
    {
        
    }


}
