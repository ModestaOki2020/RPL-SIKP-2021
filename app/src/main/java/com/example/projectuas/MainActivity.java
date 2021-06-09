package com.example.projectuas;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.cardview.widget.CardView;

import android.content.Intent;
import android.os.Bundle;
import android.view.MenuItem;
import android.view.View;

import com.google.android.material.bottomnavigation.BottomNavigationView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        BottomNavigationView bottomNavigationView = findViewById(R.id.bottomNavigationView);

        CardView btnSuratKP = findViewById(R.id.pengajuanSuratKP);
        CardView btnKP = findViewById(R.id.PengajuanKP);
        CardView btnPraKP = findViewById(R.id.PengajuanPraKP);

        btnSuratKP.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent daftarKP = new Intent(MainActivity.this, DaftarSuratKP.class);
                startActivity(daftarKP);
            }
        });
        btnKP.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent daftarKP = new Intent(MainActivity.this, PengajuankpActivity.class);
                startActivity(daftarKP);
            }
        });
        btnPraKP.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent daftarKP = new Intent(MainActivity.this, PengajuanPrakp.class);
                startActivity(daftarKP);
            }
        });

        bottomNavigationView.setSelectedItemId(R.id.home);

        bottomNavigationView.setOnNavigationItemSelectedListener(new BottomNavigationView.OnNavigationItemSelectedListener() {
            @Override
            public boolean onNavigationItemSelected(@NonNull MenuItem item) {
                switch (item.getItemId()){
                    case R.id.profile:
                        startActivity(new Intent(MainActivity.this,ProfileActivity.class));
                        overridePendingTransition(0,0);
                        finish();
                        return true;
                    case R.id.home:
                        return true;
                }
                return false;
            }
        });


    }
}
