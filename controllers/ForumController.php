<?php

namespace app\controllers;

class ForumController extends \yii\web\Controller
{
    
    public function actionPosts()
    {
        $model = new app\models\Posts();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('forum/posts', [
            'model' => $model,
        ]);
    }

    public function actionTopics()
    {
        $model = new app\models\Topics();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('forum/topics', [
            'model' => $model,
        ]);
    }

}
