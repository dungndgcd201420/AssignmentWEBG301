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

/* products/index.html.twig */
class __TwigTemplate_8cb7e34e2308eacaa660371a0fcb398a016d03f68a7a786b5e06af5e0c90b4c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Musteroid Inventory";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<head>
    <title>Musteroid</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"css/bootstrap/bootstrap.min.css\">
    <link rel=\"icon\" href=\"img/muszoid-removebg-preview1.png\">
</head>
<body style=\"height:100%;\">
    <div>
       <nav class=\"navbar navbar-expand-lg navbar-light py-4\">
        <div class=\"container\"><a class=\"navbar-brand\" href=\"#\"><img class=\"img-fluid\" src=\"img/muszoid-removebg-preview.png\" alt=\"\" width=\"120px\"></a>
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#nav08\" aria-controls=\"nav08\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
          <div class=\"collapse navbar-collapse\" id=\"nav08\">
            <ul class=\"d-none d-lg-flex navbar-nav mx-auto mt-3 mt-lg-0 mb-3 mb-lg-0 position-absolute top-50 start-50 translate-middle\">
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory\">Home</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../products\">Inventory</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory/contact\">About Us</a></li>
            </ul>
            <ul class=\"navbar-nav mt-3 mt-lg-0 mb-3 mb-lg-0 d-lg-none\">
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory\">Home</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../products\">Inventory</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory/contact\">About Us</a></li>
            </ul>
            <div class=\"ms-lg-auto\">";
        // line 32
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), null))) {
            // line 33
            echo "                    <a class=\"nav-link\" href=\"/";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) ? ("logout") : ("login"));
            echo "\" @click=\"isOpen = false\"><button class=\"btn btn-primary me-2\"> ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) ? ("Logout") : ("Login"));
            echo " </button></a>
                    ";
        } else {
            // line 35
            echo "                    <a class=\"nav-link\" href=\"/";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) ? ("logout") : ("login"));
            echo "\" @click=\"isOpen = false\"><button class=\"btn btn-danger me-2\"> ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) ? ("Logout") : ("Login"));
            echo " </button></a>
                    ";
        }
        // line 37
        echo "          </div>
        </div>
        </div>
      </nav>
    </div>
    ";
        // line 42
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), null))) {
            // line 43
            echo "        <h2 class=\"text-center\">You haven't logged in yet</h2>
        <img src=\"img/nodata.jpg\" class=\"rounded mx-auto d-block\" style=\"width: 50%; height:50%;\">
    ";
        } else {
            // line 46
            echo "    <h2 class=\"text-center\">Choose the product you want to manage</h2>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"card bg-light text-white col-sm-6 text-left\" style=\"border: none;\">
                <img src=\"img/vinyl.jpg\" class=\"card-img w-60\" alt=\"\">
                <div class=\"card-img-overlay\" style=\"background-color: rgba(0, 0, 0, 0.6); margin-right: 12px; margin-left: 13px;\">
                    <h5 class=\"card-title\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);\">ALBUMS INVENTORY</h5>
                    <a href=\"products/album\" class=\"btn btn-outline-light\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, 50%);\">Go to there</a>
                </div>
            </div>
            <div class=\"card bg-light text-white col-sm-6 text-right\" style=\"border: none;\">
                <img src=\"img/shirt.jpg\" class=\"card-img w-60\" alt=\"\">
                <div class=\"card-img-overlay\" style=\"background-color: rgba(0, 0, 0, 0.6); margin-left: 12px; margin-right: 3px;\">
                    <h5 class=\"card-title\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);\">SHIRTS INVENTORY</h5>
                    <a href=\"products/shirt\" class=\"btn btn-outline-light\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, 50%);\">Go to there</a>
                </div>
            </div>
        </div>
    </div>
    
    ";
        }
        // line 68
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 68,  148 => 46,  143 => 43,  141 => 42,  134 => 37,  126 => 35,  118 => 33,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Musteroid Inventory{% endblock %}

{% block body %}
<head>
    <title>Musteroid</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"css/bootstrap/bootstrap.min.css\">
    <link rel=\"icon\" href=\"img/muszoid-removebg-preview1.png\">
</head>
<body style=\"height:100%;\">
    <div>
       <nav class=\"navbar navbar-expand-lg navbar-light py-4\">
        <div class=\"container\"><a class=\"navbar-brand\" href=\"#\"><img class=\"img-fluid\" src=\"img/muszoid-removebg-preview.png\" alt=\"\" width=\"120px\"></a>
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#nav08\" aria-controls=\"nav08\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
          <div class=\"collapse navbar-collapse\" id=\"nav08\">
            <ul class=\"d-none d-lg-flex navbar-nav mx-auto mt-3 mt-lg-0 mb-3 mb-lg-0 position-absolute top-50 start-50 translate-middle\">
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory\">Home</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../products\">Inventory</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory/contact\">About Us</a></li>
            </ul>
            <ul class=\"navbar-nav mt-3 mt-lg-0 mb-3 mb-lg-0 d-lg-none\">
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory\">Home</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../products\">Inventory</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory/contact\">About Us</a></li>
            </ul>
            <div class=\"ms-lg-auto\">{% if app.user == null %}
                    <a class=\"nav-link\" href=\"/{{app.user ? 'logout' : 'login'}}\" @click=\"isOpen = false\"><button class=\"btn btn-primary me-2\"> {{ app.user ? 'Logout' : 'Login' }} </button></a>
                    {% else %}
                    <a class=\"nav-link\" href=\"/{{app.user ? 'logout' : 'login'}}\" @click=\"isOpen = false\"><button class=\"btn btn-danger me-2\"> {{ app.user ? 'Logout' : 'Login' }} </button></a>
                    {% endif %}
          </div>
        </div>
        </div>
      </nav>
    </div>
    {% if app.user == null %}
        <h2 class=\"text-center\">You haven't logged in yet</h2>
        <img src=\"img/nodata.jpg\" class=\"rounded mx-auto d-block\" style=\"width: 50%; height:50%;\">
    {% else %}
    <h2 class=\"text-center\">Choose the product you want to manage</h2>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"card bg-light text-white col-sm-6 text-left\" style=\"border: none;\">
                <img src=\"img/vinyl.jpg\" class=\"card-img w-60\" alt=\"\">
                <div class=\"card-img-overlay\" style=\"background-color: rgba(0, 0, 0, 0.6); margin-right: 12px; margin-left: 13px;\">
                    <h5 class=\"card-title\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);\">ALBUMS INVENTORY</h5>
                    <a href=\"products/album\" class=\"btn btn-outline-light\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, 50%);\">Go to there</a>
                </div>
            </div>
            <div class=\"card bg-light text-white col-sm-6 text-right\" style=\"border: none;\">
                <img src=\"img/shirt.jpg\" class=\"card-img w-60\" alt=\"\">
                <div class=\"card-img-overlay\" style=\"background-color: rgba(0, 0, 0, 0.6); margin-left: 12px; margin-right: 3px;\">
                    <h5 class=\"card-title\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);\">SHIRTS INVENTORY</h5>
                    <a href=\"products/shirt\" class=\"btn btn-outline-light\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, 50%);\">Go to there</a>
                </div>
            </div>
        </div>
    </div>
    
    {% endif %}


    {% endblock %}

    ", "products/index.html.twig", "C:\\Users\\my_pc\\AssignmentWEBG301-BranchKhanh\\templates\\products\\index.html.twig");
    }
}
