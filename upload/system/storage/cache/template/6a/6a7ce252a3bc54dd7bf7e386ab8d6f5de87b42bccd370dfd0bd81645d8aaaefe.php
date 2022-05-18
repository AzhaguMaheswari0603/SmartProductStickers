<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/addlabel.twig */
class __TwigTemplate_a245622479dee64e4f1b0dfe8687681d7150ff9d880c6fe4c81bd6f3d9076d30 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 29
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 32
        if ((($context["module_addlabel_status"] ?? null) == 1)) {
            // line 33
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 34
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 36
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 37
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 39
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-position\">";
        // line 44
        echo ($context["entry_position"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_position\" id=\"input-position\" class=\"form-control\">
                ";
        // line 47
        if ((($context["module_label_position"] ?? null) == 3)) {
            // line 48
            echo "
                <option value=\"3\" selected=\"selected\">";
            // line 49
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 50
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 51
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 52
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } elseif ((        // line 55
($context["module_watermark_position"] ?? null) == 2)) {
            // line 56
            echo "
                <option value=\"3\">";
            // line 57
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 58
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 59
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 60
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } elseif ((        // line 63
($context["module_watermark_position"] ?? null) == 1)) {
            // line 64
            echo "
                <option value=\"8\">";
            // line 65
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 66
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\" selected=\"selected\">";
            // line 67
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 68
            echo ($context["text_center"] ?? null);
            echo "</option>
                

                ";
        } elseif ((        // line 71
($context["module_watermark_position"] ?? null) == 5)) {
            // line 72
            echo "
                <option value=\"8\">";
            // line 73
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 74
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 75
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\" selected=\"selected\">";
            // line 76
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 77
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 78
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 79
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 80
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 81
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 83
($context["module_watermark_position"] ?? null) == 4)) {
            // line 84
            echo "
                <option value=\"8\">";
            // line 85
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 86
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 87
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 88
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\" selected=\"selected\">";
            // line 89
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 90
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 91
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 92
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 93
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 95
($context["module_watermark_position"] ?? null) == 3)) {
            // line 96
            echo "
                <option value=\"8\">";
            // line 97
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 98
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 99
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 100
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 101
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\" selected=\"selected\">";
            // line 102
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 103
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 104
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 105
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 107
($context["module_watermark_position"] ?? null) == 2)) {
            // line 108
            echo "
                <option value=\"8\">";
            // line 109
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 110
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 111
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 112
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 113
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 114
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 115
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 116
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 117
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 119
($context["module_watermark_position"] ?? null) == 1)) {
            // line 120
            echo "
                <option value=\"8\">";
            // line 121
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 122
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 123
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 124
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 125
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 126
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 127
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 128
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 129
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        } else {
            // line 132
            echo "
                <option value=\"8\">";
            // line 133
            echo ($context["text_top_left"] ?? null);
            echo "</option>
                <option value=\"7\">";
            // line 134
            echo ($context["text_top_center"] ?? null);
            echo "</option>
                <option value=\"6\">";
            // line 135
            echo ($context["text_top_right"] ?? null);
            echo "</option>
                <option value=\"5\">";
            // line 136
            echo ($context["text_center"] ?? null);
            echo "</option>
                <option value=\"4\">";
            // line 137
            echo ($context["text_center_left"] ?? null);
            echo "</option>
                <option value=\"3\">";
            // line 138
            echo ($context["text_center_right"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 139
            echo ($context["text_bottom_left"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 140
            echo ($context["text_bottom_right"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 141
            echo ($context["text_bottom_center"] ?? null);
            echo "</option>

                ";
        }
        // line 144
        echo "              </select>
            </div>
          </div>
         
          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-opacity\">";
        // line 149
        echo ($context["entry_opacity"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_opacity\" value=\"";
        // line 151
        echo ($context["module_watermark_opacity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_opacity"] ?? null);
        echo "\" id=\"opacity\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group\">  
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktextsize\">";
        // line 156
        echo ($context["entry_watermarktextsize"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_watermarktextsize\" value=\"";
        // line 158
        echo ($context["module_watermark_watermarktextsize"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_watermarktextsize"] ?? null);
        echo "\" id=\"watermarktextsize\" class=\"form-control\"/>
            </div>
          </div>
            
          <div class=\"form-group\">  
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktext\">";
        // line 163
        echo ($context["entry_watermarktext"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_watermarktext\" value=\"";
        // line 165
        echo ($context["module_watermark_watermarktext"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_watermarktext"] ?? null);
        echo "\" id=\"watermarktext\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-font\">";
        // line 170
        echo ($context["entry_font"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_watermark_font\" id=\"input-font\" class=\"form-control\">
                ";
        // line 173
        if ((($context["module_watermark_font"] ?? null) == 2)) {
            // line 174
            echo "
                <option value=\"2\" selected=\"selected\">";
            // line 175
            echo ($context["text_font1"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 176
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 177
            echo ($context["text_font3"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 179
($context["module_watermark_font"] ?? null) == 1)) {
            // line 180
            echo "
                <option value=\"2\">";
            // line 181
            echo ($context["text_font1"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 182
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 183
            echo ($context["text_font3"] ?? null);
            echo "</option>

                ";
        } else {
            // line 186
            echo "
                <option value=\"2\">";
            // line 187
            echo ($context["text_font3"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 188
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 189
            echo ($context["text_font1"] ?? null);
            echo "</option>
                ";
        }
        // line 191
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktextcolor\">";
        // line 196
        echo ($context["entry_watermarktextcolor"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_watermark_watermarktextcolor\" id=\"input-watermarktextcolor\" class=\"form-control\">
                ";
        // line 199
        if ((($context["module_watermark_watermarktextcolor"] ?? null) == 3)) {
            // line 200
            echo "
                <option value=\"3\" selected=\"selected\">";
            // line 201
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 202
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 203
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 204
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 206
($context["module_watermark_watermarktextcolor"] ?? null) == 2)) {
            // line 207
            echo "
                <option value=\"3\">";
            // line 208
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 209
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 210
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 211
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 213
($context["module_watermark_watermarktextcolor"] ?? null) == 1)) {
            // line 214
            echo "
                <option value=\"3\">";
            // line 215
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 216
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 217
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 218
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } else {
            // line 221
            echo "                <option value=\"3\">";
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 222
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 223
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 224
            echo ($context["text_white"] ?? null);
            echo "</option>
                ";
        }
        // line 226
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 231
        echo ($context["entry_createwatermark"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-createwatermark\" class=\"btn btn-primary\"><i class=\"fa fa-createwatermark\"></i> ";
        // line 233
        echo ($context["button_createwatermark"] ?? null);
        echo "</button> 
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 238
        echo ($context["entry_removecache"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-removecache\" class=\"btn btn-primary\"><i class=\"fa fa-removecache\"></i> ";
        // line 240
        echo ($context["button_removecache"] ?? null);
        echo "</button> 
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--

\$('#button-createwatermark').on('click', function() {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/watermark/createwatermark&user_token=";
        // line 252
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-createwatermark').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-createwatermark').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
});

\$('#button-removecache').on('click', function() {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/watermark/removecache&user_token=";
        // line 281
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-removecache').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-removecache').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
});


</script>
";
        // line 310
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/addlabel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  782 => 310,  750 => 281,  718 => 252,  703 => 240,  698 => 238,  690 => 233,  685 => 231,  678 => 226,  673 => 224,  669 => 223,  665 => 222,  660 => 221,  654 => 218,  650 => 217,  646 => 216,  642 => 215,  639 => 214,  637 => 213,  632 => 211,  628 => 210,  624 => 209,  620 => 208,  617 => 207,  615 => 206,  610 => 204,  606 => 203,  602 => 202,  598 => 201,  595 => 200,  593 => 199,  587 => 196,  580 => 191,  575 => 189,  571 => 188,  567 => 187,  564 => 186,  558 => 183,  554 => 182,  550 => 181,  547 => 180,  545 => 179,  540 => 177,  536 => 176,  532 => 175,  529 => 174,  527 => 173,  521 => 170,  511 => 165,  506 => 163,  496 => 158,  491 => 156,  481 => 151,  476 => 149,  469 => 144,  463 => 141,  459 => 140,  455 => 139,  451 => 138,  447 => 137,  443 => 136,  439 => 135,  435 => 134,  431 => 133,  428 => 132,  422 => 129,  418 => 128,  414 => 127,  410 => 126,  406 => 125,  402 => 124,  398 => 123,  394 => 122,  390 => 121,  387 => 120,  385 => 119,  380 => 117,  376 => 116,  372 => 115,  368 => 114,  364 => 113,  360 => 112,  356 => 111,  352 => 110,  348 => 109,  345 => 108,  343 => 107,  338 => 105,  334 => 104,  330 => 103,  326 => 102,  322 => 101,  318 => 100,  314 => 99,  310 => 98,  306 => 97,  303 => 96,  301 => 95,  296 => 93,  292 => 92,  288 => 91,  284 => 90,  280 => 89,  276 => 88,  272 => 87,  268 => 86,  264 => 85,  261 => 84,  259 => 83,  254 => 81,  250 => 80,  246 => 79,  242 => 78,  238 => 77,  234 => 76,  230 => 75,  226 => 74,  222 => 73,  219 => 72,  217 => 71,  211 => 68,  207 => 67,  203 => 66,  199 => 65,  196 => 64,  194 => 63,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  173 => 56,  171 => 55,  165 => 52,  161 => 51,  157 => 50,  153 => 49,  150 => 48,  148 => 47,  142 => 44,  135 => 39,  130 => 37,  125 => 36,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/addlabel.twig", "");
    }
}
