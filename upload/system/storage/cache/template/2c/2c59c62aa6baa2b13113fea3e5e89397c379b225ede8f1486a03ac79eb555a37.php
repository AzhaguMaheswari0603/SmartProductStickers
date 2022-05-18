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
class __TwigTemplate_3e9721ca4c3f844cace1bbf8ad80de564f8fb8c5e097488f8a6d8006c998e831 extends \Twig\Template
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
($context["module_label_position"] ?? null) == 2)) {
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
($context["module_label_position"] ?? null) == 1)) {
            // line 64
            echo "
                <option value=\"3\">";
            // line 65
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 66
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 67
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 68
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } else {
            // line 72
            echo "                 <option value=\"3\">";
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 73
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 74
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 75
            echo ($context["right_bottom"] ?? null);
            echo "</option>
               
                ";
        }
        // line 78
        echo "              </select>
            </div>
          </div>
         
          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-opacity\">";
        // line 83
        echo ($context["entry_opacity"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_opacity\" value=\"";
        // line 85
        echo ($context["module_watermark_opacity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_opacity"] ?? null);
        echo "\" id=\"opacity\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group\">  
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktextsize\">";
        // line 90
        echo ($context["entry_watermarktextsize"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_watermarktextsize\" value=\"";
        // line 92
        echo ($context["module_watermark_watermarktextsize"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_watermarktextsize"] ?? null);
        echo "\" id=\"watermarktextsize\" class=\"form-control\"/>
            </div>
          </div>
            
          <div class=\"form-group\">  
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktext\">";
        // line 97
        echo ($context["entry_watermarktext"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_watermark_watermarktext\" value=\"";
        // line 99
        echo ($context["module_watermark_watermarktext"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_watermarktext"] ?? null);
        echo "\" id=\"watermarktext\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-font\">";
        // line 104
        echo ($context["entry_font"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_watermark_font\" id=\"input-font\" class=\"form-control\">
                ";
        // line 107
        if ((($context["module_watermark_font"] ?? null) == 2)) {
            // line 108
            echo "
                <option value=\"2\" selected=\"selected\">";
            // line 109
            echo ($context["text_font1"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 110
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 111
            echo ($context["text_font3"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 113
($context["module_watermark_font"] ?? null) == 1)) {
            // line 114
            echo "
                <option value=\"2\">";
            // line 115
            echo ($context["text_font1"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 116
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 117
            echo ($context["text_font3"] ?? null);
            echo "</option>

                ";
        } else {
            // line 120
            echo "
                <option value=\"2\">";
            // line 121
            echo ($context["text_font3"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 122
            echo ($context["text_font2"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 123
            echo ($context["text_font1"] ?? null);
            echo "</option>
                ";
        }
        // line 125
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-watermarktextcolor\">";
        // line 130
        echo ($context["entry_watermarktextcolor"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_watermark_watermarktextcolor\" id=\"input-watermarktextcolor\" class=\"form-control\">
                ";
        // line 133
        if ((($context["module_watermark_watermarktextcolor"] ?? null) == 3)) {
            // line 134
            echo "
                <option value=\"3\" selected=\"selected\">";
            // line 135
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 136
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 137
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 138
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 140
($context["module_watermark_watermarktextcolor"] ?? null) == 2)) {
            // line 141
            echo "
                <option value=\"3\">";
            // line 142
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 143
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 144
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 145
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } elseif ((        // line 147
($context["module_watermark_watermarktextcolor"] ?? null) == 1)) {
            // line 148
            echo "
                <option value=\"3\">";
            // line 149
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 150
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 151
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 152
            echo ($context["text_white"] ?? null);
            echo "</option>

                ";
        } else {
            // line 155
            echo "                <option value=\"3\">";
            echo ($context["text_blue"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 156
            echo ($context["text_black"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 157
            echo ($context["text_red"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 158
            echo ($context["text_white"] ?? null);
            echo "</option>
                ";
        }
        // line 160
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 165
        echo ($context["entry_createwatermark"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-createwatermark\" class=\"btn btn-primary\"><i class=\"fa fa-createwatermark\"></i> ";
        // line 167
        echo ($context["button_createwatermark"] ?? null);
        echo "</button> 
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 172
        echo ($context["entry_removecache"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-removecache\" class=\"btn btn-primary\"><i class=\"fa fa-removecache\"></i> ";
        // line 174
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
        // line 186
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
        // line 215
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
        // line 244
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
        return array (  550 => 244,  518 => 215,  486 => 186,  471 => 174,  466 => 172,  458 => 167,  453 => 165,  446 => 160,  441 => 158,  437 => 157,  433 => 156,  428 => 155,  422 => 152,  418 => 151,  414 => 150,  410 => 149,  407 => 148,  405 => 147,  400 => 145,  396 => 144,  392 => 143,  388 => 142,  385 => 141,  383 => 140,  378 => 138,  374 => 137,  370 => 136,  366 => 135,  363 => 134,  361 => 133,  355 => 130,  348 => 125,  343 => 123,  339 => 122,  335 => 121,  332 => 120,  326 => 117,  322 => 116,  318 => 115,  315 => 114,  313 => 113,  308 => 111,  304 => 110,  300 => 109,  297 => 108,  295 => 107,  289 => 104,  279 => 99,  274 => 97,  264 => 92,  259 => 90,  249 => 85,  244 => 83,  237 => 78,  231 => 75,  227 => 74,  223 => 73,  218 => 72,  211 => 68,  207 => 67,  203 => 66,  199 => 65,  196 => 64,  194 => 63,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  173 => 56,  171 => 55,  165 => 52,  161 => 51,  157 => 50,  153 => 49,  150 => 48,  148 => 47,  142 => 44,  135 => 39,  130 => 37,  125 => 36,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/addlabel.twig", "");
    }
}
