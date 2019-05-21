package com.example.julienlegales.webserviceandroid;

import android.os.AsyncTask;
import android.util.Log;

import java.util.ArrayList;

import retrofit.ErrorHandler;
import retrofit.RestAdapter;
import retrofit.RetrofitError;
import retrofit.android.AndroidLog;
import retrofit.client.Response;

public class ListTest extends AsyncTask<String,Void,ArrayList<Test>> {
    @Override
    protected ArrayList<Test> doInBackground(String... strings) {

        Simpleduc simpleduc = new RestAdapter.Builder()
                .setEndpoint(Simpleduc.url)
                .setErrorHandler(new ErrorHandler() {
                    @Override
                    public Throwable handleError(RetrofitError cause) {
                        Response r = cause.getResponse();
                        if (r != null){
                            Log.d("codeHTTP", String.valueOf(r.getStatus()));

                        }
                        return cause;
                    }
                })
                .setLog(new AndroidLog("retrofit"))
                .setLogLevel(RestAdapter.LogLevel.FULL)
                .build()
                .create(Simpleduc.class);


        ArrayList<Test> listTest = simpleduc.listTest();
        return listTest;
    }
}
