package com.proyekapi.proyekapi.controllers;

import com.proyekapi.proyekapi.entities.Lokasi;
import com.proyekapi.proyekapi.services.LokasiService;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/lokasi")
public class LokasiController {

    private final LokasiService lokasiService;

    public LokasiController(LokasiService lokasiService) {
        this.lokasiService = lokasiService;
    }

    @PostMapping
    public ResponseEntity<Lokasi> createLokasi(@RequestBody Lokasi lokasi) {
        Lokasi savedLokasi = lokasiService.saveLokasi(lokasi);
        return new ResponseEntity<>(savedLokasi, HttpStatus.CREATED);
    }

    @GetMapping
    public ResponseEntity<List<Lokasi>> getAllLokasi() {
        List<Lokasi> lokasiList = lokasiService.getAllLokasi();
        return new ResponseEntity<>(lokasiList, HttpStatus.OK);
    }

    @PutMapping("/{id}")
    public ResponseEntity<Lokasi> updateLokasi(@PathVariable Integer id, @RequestBody Lokasi lokasiDetails) {
        Lokasi updatedLokasi = lokasiService.updateLokasi(id, lokasiDetails);
        return new ResponseEntity<>(updatedLokasi, HttpStatus.OK);
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteLokasi(@PathVariable Integer id) {
        lokasiService.deleteLokasi(id);
        return new ResponseEntity<>(HttpStatus.NO_CONTENT);
    }
}
