<?php

/* ::base.html.twig */
class __TwigTemplate_0b0baa79b7fd4dcac98304d58e8d34405b9d05ab0bdd64df1de7da0ca45ca6a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0d6671e02a382f0abbff7d48a20c30e745278542cf2a28432f3dbd1c5455f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d6671e02a382f0abbff7d48a20c30e745278542cf2a28432f3dbd1c5455f90->enter($__internal_a0d6671e02a382f0abbff7d48a20c30e745278542cf2a28432f3dbd1c5455f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8b1044cca7192b87602e2677dce16da5a646b4f1ededb0602c48822e979b6c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1044cca7192b87602e2677dce16da5a646b4f1ededb0602c48822e979b6c42->enter($__internal_8b1044cca7192b87602e2677dce16da5a646b4f1ededb0602c48822e979b6c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "        
    </body>
</html>
";
        
        $__internal_a0d6671e02a382f0abbff7d48a20c30e745278542cf2a28432f3dbd1c5455f90->leave($__internal_a0d6671e02a382f0abbff7d48a20c30e745278542cf2a28432f3dbd1c5455f90_prof);

        
        $__internal_8b1044cca7192b87602e2677dce16da5a646b4f1ededb0602c48822e979b6c42->leave($__internal_8b1044cca7192b87602e2677dce16da5a646b4f1ededb0602c48822e979b6c42_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd5f17de36375dee5edad544ec020920fe310bff6268604904b439d59222711b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5f17de36375dee5edad544ec020920fe310bff6268604904b439d59222711b->enter($__internal_cd5f17de36375dee5edad544ec020920fe310bff6268604904b439d59222711b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8b171c56d694d16d964e3802e8c1addc22b7d998e5479eb0c7665fe7029e127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b171c56d694d16d964e3802e8c1addc22b7d998e5479eb0c7665fe7029e127->enter($__internal_d8b171c56d694d16d964e3802e8c1addc22b7d998e5479eb0c7665fe7029e127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d8b171c56d694d16d964e3802e8c1addc22b7d998e5479eb0c7665fe7029e127->leave($__internal_d8b171c56d694d16d964e3802e8c1addc22b7d998e5479eb0c7665fe7029e127_prof);

        
        $__internal_cd5f17de36375dee5edad544ec020920fe310bff6268604904b439d59222711b->leave($__internal_cd5f17de36375dee5edad544ec020920fe310bff6268604904b439d59222711b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_452de8a3d3e77a1566f490e9fe6457abc7ec3b0495597346b8e09477c9eaaa2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452de8a3d3e77a1566f490e9fe6457abc7ec3b0495597346b8e09477c9eaaa2f->enter($__internal_452de8a3d3e77a1566f490e9fe6457abc7ec3b0495597346b8e09477c9eaaa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3705b3f756e04378650ab3c16ce0791a269800f96e49a5953e083eaae075b252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3705b3f756e04378650ab3c16ce0791a269800f96e49a5953e083eaae075b252->enter($__internal_3705b3f756e04378650ab3c16ce0791a269800f96e49a5953e083eaae075b252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_3705b3f756e04378650ab3c16ce0791a269800f96e49a5953e083eaae075b252->leave($__internal_3705b3f756e04378650ab3c16ce0791a269800f96e49a5953e083eaae075b252_prof);

        
        $__internal_452de8a3d3e77a1566f490e9fe6457abc7ec3b0495597346b8e09477c9eaaa2f->leave($__internal_452de8a3d3e77a1566f490e9fe6457abc7ec3b0495597346b8e09477c9eaaa2f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d170bc29c52c26d48616629888ae1507109794667afe51c1e3b124f64b9c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d170bc29c52c26d48616629888ae1507109794667afe51c1e3b124f64b9c33->enter($__internal_d3d170bc29c52c26d48616629888ae1507109794667afe51c1e3b124f64b9c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_464fdd566ad20185d3cfaca3692af67b1ccd531a269083d2c6b628855b9ec8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464fdd566ad20185d3cfaca3692af67b1ccd531a269083d2c6b628855b9ec8c3->enter($__internal_464fdd566ad20185d3cfaca3692af67b1ccd531a269083d2c6b628855b9ec8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_464fdd566ad20185d3cfaca3692af67b1ccd531a269083d2c6b628855b9ec8c3->leave($__internal_464fdd566ad20185d3cfaca3692af67b1ccd531a269083d2c6b628855b9ec8c3_prof);

        
        $__internal_d3d170bc29c52c26d48616629888ae1507109794667afe51c1e3b124f64b9c33->leave($__internal_d3d170bc29c52c26d48616629888ae1507109794667afe51c1e3b124f64b9c33_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19ed0f7038699dab786e376ee80160afcf32185856ddfa0fefa2ad4f4554eac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ed0f7038699dab786e376ee80160afcf32185856ddfa0fefa2ad4f4554eac5->enter($__internal_19ed0f7038699dab786e376ee80160afcf32185856ddfa0fefa2ad4f4554eac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_611343dab586e4bd689c92ff533d9751cd65efe714f16b503adb23d1d61c3995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611343dab586e4bd689c92ff533d9751cd65efe714f16b503adb23d1d61c3995->enter($__internal_611343dab586e4bd689c92ff533d9751cd65efe714f16b503adb23d1d61c3995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_611343dab586e4bd689c92ff533d9751cd65efe714f16b503adb23d1d61c3995->leave($__internal_611343dab586e4bd689c92ff533d9751cd65efe714f16b503adb23d1d61c3995_prof);

        
        $__internal_19ed0f7038699dab786e376ee80160afcf32185856ddfa0fefa2ad4f4554eac5->leave($__internal_19ed0f7038699dab786e376ee80160afcf32185856ddfa0fefa2ad4f4554eac5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 16,  115 => 15,  103 => 10,  99 => 9,  94 => 8,  85 => 7,  67 => 6,  54 => 17,  51 => 16,  49 => 15,  42 => 12,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/base.html.twig");
    }
}
