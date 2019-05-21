package com.example.julienlegales.webserviceandroid;

import android.os.AsyncTask;
import android.util.Log;

import java.util.ArrayList;

import retrofit.ErrorHandler;
import retrofit.RestAdapter;
import retrofit.RetrofitError;
import retrofit.android.AndroidLog;
import retrofit.client.Response;

/**
 * Created by julienlegales on 23/03/2018.
 */

public class ListTheme extends AsyncTask<String,Void,ArrayList<Theme>> {
    @Override
    protected ArrayList<Theme> doInBackground(String... strings) {
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
        // permet de selectionner la route
        ArrayList<Theme> listTheme = simpleduc.listTheme();
        return listTheme;
    }


}
