<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cb073b442a5f62042976b2c9b29265f0f102533d761b12f2080d6a9b91b47fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad983ac5a45e9cd552f3ad88fd98111094f5b4b2d99d4d5479c5324b5f5f7d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad983ac5a45e9cd552f3ad88fd98111094f5b4b2d99d4d5479c5324b5f5f7d3b->enter($__internal_ad983ac5a45e9cd552f3ad88fd98111094f5b4b2d99d4d5479c5324b5f5f7d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_76d63c3f17bf1d9477d8075114d76b78c0061400ce3c3e3cb3ad6f0aff952e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d63c3f17bf1d9477d8075114d76b78c0061400ce3c3e3cb3ad6f0aff952e9a->enter($__internal_76d63c3f17bf1d9477d8075114d76b78c0061400ce3c3e3cb3ad6f0aff952e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ad983ac5a45e9cd552f3ad88fd98111094f5b4b2d99d4d5479c5324b5f5f7d3b->leave($__internal_ad983ac5a45e9cd552f3ad88fd98111094f5b4b2d99d4d5479c5324b5f5f7d3b_prof);

        
        $__internal_76d63c3f17bf1d9477d8075114d76b78c0061400ce3c3e3cb3ad6f0aff952e9a->leave($__internal_76d63c3f17bf1d9477d8075114d76b78c0061400ce3c3e3cb3ad6f0aff952e9a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dae12b8b774b3a36f30542c32d14b1c91a512837db1a0cf47a9c29e4017bad51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae12b8b774b3a36f30542c32d14b1c91a512837db1a0cf47a9c29e4017bad51->enter($__internal_dae12b8b774b3a36f30542c32d14b1c91a512837db1a0cf47a9c29e4017bad51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c98dec2606b494514d11d673e4ef5d927a8be85bf7f23577a3a161885e38f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c98dec2606b494514d11d673e4ef5d927a8be85bf7f23577a3a161885e38f32->enter($__internal_1c98dec2606b494514d11d673e4ef5d927a8be85bf7f23577a3a161885e38f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1c98dec2606b494514d11d673e4ef5d927a8be85bf7f23577a3a161885e38f32->leave($__internal_1c98dec2606b494514d11d673e4ef5d927a8be85bf7f23577a3a161885e38f32_prof);

        
        $__internal_dae12b8b774b3a36f30542c32d14b1c91a512837db1a0cf47a9c29e4017bad51->leave($__internal_dae12b8b774b3a36f30542c32d14b1c91a512837db1a0cf47a9c29e4017bad51_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9653cfbc3bc1105c3e036a97b9f6ab103a93bb7028ca0df566a5a3a1d3e910d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9653cfbc3bc1105c3e036a97b9f6ab103a93bb7028ca0df566a5a3a1d3e910d7->enter($__internal_9653cfbc3bc1105c3e036a97b9f6ab103a93bb7028ca0df566a5a3a1d3e910d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab1d8f31dd61241e0cd69c27052ed56849b3f27786414d4c37a2db0945c99840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1d8f31dd61241e0cd69c27052ed56849b3f27786414d4c37a2db0945c99840->enter($__internal_ab1d8f31dd61241e0cd69c27052ed56849b3f27786414d4c37a2db0945c99840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ab1d8f31dd61241e0cd69c27052ed56849b3f27786414d4c37a2db0945c99840->leave($__internal_ab1d8f31dd61241e0cd69c27052ed56849b3f27786414d4c37a2db0945c99840_prof);

        
        $__internal_9653cfbc3bc1105c3e036a97b9f6ab103a93bb7028ca0df566a5a3a1d3e910d7->leave($__internal_9653cfbc3bc1105c3e036a97b9f6ab103a93bb7028ca0df566a5a3a1d3e910d7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_936c4b69d0149697ea3f5226f9f3b955d7348f86858f8ccc4ba1710a679c02c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936c4b69d0149697ea3f5226f9f3b955d7348f86858f8ccc4ba1710a679c02c6->enter($__internal_936c4b69d0149697ea3f5226f9f3b955d7348f86858f8ccc4ba1710a679c02c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1aeb9b699943303c655efb96b82a92ee5fa2e30bbea22509d77c8f9d32bd308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1aeb9b699943303c655efb96b82a92ee5fa2e30bbea22509d77c8f9d32bd308->enter($__internal_c1aeb9b699943303c655efb96b82a92ee5fa2e30bbea22509d77c8f9d32bd308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1aeb9b699943303c655efb96b82a92ee5fa2e30bbea22509d77c8f9d32bd308->leave($__internal_c1aeb9b699943303c655efb96b82a92ee5fa2e30bbea22509d77c8f9d32bd308_prof);

        
        $__internal_936c4b69d0149697ea3f5226f9f3b955d7348f86858f8ccc4ba1710a679c02c6->leave($__internal_936c4b69d0149697ea3f5226f9f3b955d7348f86858f8ccc4ba1710a679c02c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\colocation_test\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
