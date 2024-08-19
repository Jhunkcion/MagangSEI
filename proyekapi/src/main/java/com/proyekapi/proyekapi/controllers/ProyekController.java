package com.proyekapi.proyekapi.controllers;

import com.proyekapi.proyekapi.entities.Proyek;
import com.proyekapi.proyekapi.services.ProyekService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/proyek")
public class ProyekController {

    @Autowired
    private ProyekService proyekService;

    @PostMapping
    public ResponseEntity<Proyek> createProyek(@RequestBody Proyek proyek) {
        Proyek savedProyek = proyekService.saveProyek(proyek);
        return new ResponseEntity<>(savedProyek, HttpStatus.CREATED);
    }

    @GetMapping
    public ResponseEntity<List<Proyek>> getAllProyek() {
        List<Proyek> proyekList = proyekService.getAllProyek();
        return new ResponseEntity<>(proyekList, HttpStatus.OK);
    }

    @PutMapping("/{id}")
    public ResponseEntity<Proyek> updateProyek(@PathVariable Integer id, @RequestBody Proyek proyekDetails) {
        Proyek updatedProyek = proyekService.updateProyek(id, proyekDetails);
        return new ResponseEntity<>(updatedProyek, HttpStatus.OK);
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteProyek(@PathVariable Integer id) {
        proyekService.deleteProyek(id);
        return new ResponseEntity<>(HttpStatus.NO_CONTENT);
    }
}
