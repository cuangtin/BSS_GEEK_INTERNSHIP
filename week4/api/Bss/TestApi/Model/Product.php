<?php

namespace Bss\TestApi\Api;
 
class CustomManagement implements \ViMagento\CustomApi\Api\CustomManagementInterface
{
    public function getProduct($id)
    {
        try{
            $arrays = [
                ['id'=>1, 'name'=>'productname1', 'class'=>'class1'],
                ['id'=>2, 'name'=>'productname2', 'class'=>'class2'],
                ['id'=>3, 'name'=>'productname3', 'class'=>'class3'],                   
                ['id'=>4, 'name'=>'productname4', 'class'=>'class4'],
                ['id'=>5, 'name'=>'productname5', 'class'=>'class5'],
            ];
            var_dump($arrays);
            for($i=0;$i<count($arrays);$i++){
                if($arrays[$i]['id']== $id){
                    return $arrays[$i];

                }
            }
        } catch (\Exception $e) {
           $response=['error' => $e->getMessage()];
        } 
    }
}