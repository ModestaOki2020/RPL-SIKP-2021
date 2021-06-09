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

public class DaftarSuratKP extends AppCompatActivity {

    FirebaseAuth fAuth;
    FirebaseFirestore fStore;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_daftar_kerja_praktik);

        fAuth = FirebaseAuth.getInstance();
        fStore = FirebaseFirestore.getInstance();

        EditText nama = findViewById(R.id.editText_namaLengkap);
        EditText nim = findViewById(R.id.editText_nim);
        EditText angkatan = findViewById(R.id.editText_angkatan);
        EditText isSurat = findViewById(R.id.editText_isiSurat);
        Button kirim = findViewById(R.id.btnKirimData);

        kirim.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                FirebaseUser firebaseUser = FirebaseAuth.getInstance().getCurrentUser();
                final String current = firebaseUser.getUid();

                Map<String, Object> pendaftaranKP = new HashMap<>();
                pendaftaranKP.put("Nama", nama.getText().toString());
                pendaftaranKP.put("nim", nim.getText().toString());
                pendaftaranKP.put("angkatan", angkatan.getText().toString());
                pendaftaranKP.put("isiSurat", isSurat.getText().toString());

// Add a new document with a generated ID
//                fStore.collection("pendaftarankp")
//                        .add(user)
//                        .addOnSuccessListener(new OnSuccessListener<DocumentReference>() {
//                            @Override
//                            public void onSuccess(DocumentReference documentReference) {
//                                Log.d("status", "DocumentSnapshot added with ID: " + documentReference.getId());
//                                Toast.makeText(DaftarSuratKP.this, "Data berhasil dikirim", Toast.LENGTH_LONG).show();
//                            }
//                        })
//                        .addOnFailureListener(new OnFailureListener() {
//                            @Override
//                            public void onFailure(@NonNull Exception e) {
//                                Log.w("status", "Error adding document", e);
//                            }
//                        });

                fStore.collection("PendaftaranKP").document(current).set(pendaftaranKP)
                        .addOnSuccessListener(new OnSuccessListener<Void>() {
                            @Override
                            public void onSuccess(Void aVoid) {
                                Log.d("TAG", "Berhasil : " + current);
                                Toast.makeText(DaftarSuratKP.this, "Data berhasil dikirim", Toast.LENGTH_LONG).show();
                                Intent intent = new Intent(DaftarSuratKP.this, MainActivity.class);
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
