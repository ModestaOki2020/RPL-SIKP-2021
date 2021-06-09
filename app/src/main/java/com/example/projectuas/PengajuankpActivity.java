package com.example.projectuas;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.google.android.gms.tasks.OnFailureListener;
import com.google.android.gms.tasks.OnSuccessListener;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;
import com.google.firebase.firestore.FirebaseFirestore;

import java.util.HashMap;
import java.util.Map;

public class PengajuankpActivity extends AppCompatActivity {

    FirebaseAuth fAuth;
    FirebaseFirestore fStore;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pengajuankp);

        fAuth = FirebaseAuth.getInstance();
        fStore = FirebaseFirestore.getInstance();

        EditText nim = findViewById(R.id.nim);
        EditText semester = findViewById(R.id.semester);
        EditText tahun = findViewById(R.id.tahun);
        EditText penguji = findViewById(R.id.penguji);
        EditText tanggalUjian = findViewById(R.id.tanggalUjian);
        EditText judul = findViewById(R.id.judul);
        Button kirim = findViewById(R.id.btnKirimData2);

        kirim.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                FirebaseUser firebaseUser = FirebaseAuth.getInstance().getCurrentUser();
                final String current = firebaseUser.getUid();

                Map<String, Object> daftarKP = new HashMap<>();
                daftarKP.put("nim", nim.getText().toString());
                daftarKP.put("semester", semester.getText().toString());
                daftarKP.put("tahun", tahun.getText().toString());
                daftarKP.put("penguji", penguji.getText().toString());
                daftarKP.put("tanggalUjian", tanggalUjian.getText().toString());
                daftarKP.put("judul", judul.getText().toString());

                fStore.collection("Daftar UJian KP").document(current).set(daftarKP)
                        .addOnSuccessListener(new OnSuccessListener<Void>() {
                            @Override
                            public void onSuccess(Void aVoid) {
                                Log.d("TAG", "Berhasil : " + current);
                                Toast.makeText(PengajuankpActivity.this, "Data berhasil dikirim", Toast.LENGTH_LONG).show();
                                Intent intent = new Intent(PengajuankpActivity.this, MainActivity.class);
                                startActivity(intent);
                                finish();

                            }
                        })
                        .addOnFailureListener(new OnFailureListener() {
                            @Override
                            public void onFailure(@NonNull Exception e) {
                                Log.d("TAG", e.toString());
                            }
                        });

            }
        });
    }
}
