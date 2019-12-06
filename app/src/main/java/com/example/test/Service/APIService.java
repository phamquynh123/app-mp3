package com.example.test.Service;

import android.widget.BaseAdapter;

public class APIService {
    private static String base_url ="https://musicappp.000webhostapp.com/Server/";

    public static DataService getService() {
        //lay du lieu de tra ve tra ve ben DataService
        return APIRetrofitCline.getClient(base_url).create(DataService.class);
    }
}
