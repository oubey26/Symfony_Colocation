<?php

/* default/index.html.twig */
class __TwigTemplate_2e1fa669739dbc77b85906e6f4ae9358405a341651a975ea514686377cabf0f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7785ca0ec1376bae074244f5b09a604e88499ee25ae77eb534710667b2abceae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7785ca0ec1376bae074244f5b09a604e88499ee25ae77eb534710667b2abceae->enter($__internal_7785ca0ec1376bae074244f5b09a604e88499ee25ae77eb534710667b2abceae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_33b59ad22e5c25a36968a6a1c983c0cacd0c49cb7932f3e34280bb29bca4a8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b59ad22e5c25a36968a6a1c983c0cacd0c49cb7932f3e34280bb29bca4a8c6->enter($__internal_33b59ad22e5c25a36968a6a1c983c0cacd0c49cb7932f3e34280bb29bca4a8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7785ca0ec1376bae074244f5b09a604e88499ee25ae77eb534710667b2abceae->leave($__internal_7785ca0ec1376bae074244f5b09a604e88499ee25ae77eb534710667b2abceae_prof);

        
        $__internal_33b59ad22e5c25a36968a6a1c983c0cacd0c49cb7932f3e34280bb29bca4a8c6->leave($__internal_33b59ad22e5c25a36968a6a1c983c0cacd0c49cb7932f3e34280bb29bca4a8c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9727796174b92522477b5a2ce88b0b7c45ca52db58f66fb818f2f4d549b8f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9727796174b92522477b5a2ce88b0b7c45ca52db58f66fb818f2f4d549b8f19->enter($__internal_b9727796174b92522477b5a2ce88b0b7c45ca52db58f66fb818f2f4d549b8f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d5c3968e7a58c1e75f3f1583fd18abbf2f48a70464ae12d96c4fb8be9f50eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5c3968e7a58c1e75f3f1583fd18abbf2f48a70464ae12d96c4fb8be9f50eb2->enter($__internal_8d5c3968e7a58c1e75f3f1583fd18abbf2f48a70464ae12d96c4fb8be9f50eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("messageAcceuil"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</h1>
            </div>

            <div id=\"status\">
                <p>
                    <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                    Your application is now ready. You can start working on it at:
                    <code>";
        // line 15
        echo twig_escape_filter($this->env, ($context["base_dir"] ?? $this->getContext($context, "base_dir")), "html", null, true);
        echo "</code>
                </p>
            </div>

            <div id=\"next\">
                <h2>What's next?</h2>
                <p>

                    <h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Les Opérations Possibles"), "html", null, true);
        echo " :</h4>
                    <table>
                        <tr>
                            <td>
                                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">
                                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se Connecter"), "html", null, true);
        echo "
                                </a>
                            </td>
                                <td></td>
                            <td>
                                <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">
                                ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creer un compte"), "html", null, true);
        echo "
                                </a>
                            </td>
                               <td></td> 
                            <td>
                                <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">
                                    ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Voir - Modifier - Supprimer les annonces"), "html", null, true);
        echo "
                                </a> 
                            </td>
                                    <td></td>
                            <td>
                                <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_new");
        echo "\">
                                    ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Créer une annonce"), "html", null, true);
        echo "
                                </a>
                            </td>
                        </tr>
                    </table>
                </p>
            </div>

        </div>
    </div>
";
        
        $__internal_8d5c3968e7a58c1e75f3f1583fd18abbf2f48a70464ae12d96c4fb8be9f50eb2->leave($__internal_8d5c3968e7a58c1e75f3f1583fd18abbf2f48a70464ae12d96c4fb8be9f50eb2_prof);

        
        $__internal_b9727796174b92522477b5a2ce88b0b7c45ca52db58f66fb818f2f4d549b8f19->leave($__internal_b9727796174b92522477b5a2ce88b0b7c45ca52db58f66fb818f2f4d549b8f19_prof);

    }

    // line 58
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d019bcf55a143d7fe6b65599de37b10c5209b68dacef7c775a3645543fea7ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d019bcf55a143d7fe6b65599de37b10c5209b68dacef7c775a3645543fea7ec4->enter($__internal_d019bcf55a143d7fe6b65599de37b10c5209b68dacef7c775a3645543fea7ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9e3e797a427be61cd1fae3cfe386a4c604f5a24d75e56e0df67dc55cc6892077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3e797a427be61cd1fae3cfe386a4c604f5a24d75e56e0df67dc55cc6892077->enter($__internal_9e3e797a427be61cd1fae3cfe386a4c604f5a24d75e56e0df67dc55cc6892077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 59
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_9e3e797a427be61cd1fae3cfe386a4c604f5a24d75e56e0df67dc55cc6892077->leave($__internal_9e3e797a427be61cd1fae3cfe386a4c604f5a24d75e56e0df67dc55cc6892077_prof);

        
        $__internal_d019bcf55a143d7fe6b65599de37b10c5209b68dacef7c775a3645543fea7ec4->leave($__internal_d019bcf55a143d7fe6b65599de37b10c5209b68dacef7c775a3645543fea7ec4_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 59,  147 => 58,  126 => 46,  122 => 45,  114 => 40,  110 => 39,  102 => 34,  98 => 33,  90 => 28,  86 => 27,  79 => 23,  68 => 15,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1> {{'messageAcceuil'|trans}} {{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}</h1>
            </div>

            <div id=\"status\">
                <p>
                    <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                    Your application is now ready. You can start working on it at:
                    <code>{{ base_dir }}</code>
                </p>
            </div>

            <div id=\"next\">
                <h2>What's next?</h2>
                <p>

                    <h4>{{'Les Opérations Possibles'|trans}} :</h4>
                    <table>
                        <tr>
                            <td>
                                <a href=\"{{ path('fos_user_security_login') }}\">
                                {{'Se Connecter'|trans}}
                                </a>
                            </td>
                                <td></td>
                            <td>
                                <a href=\"{{ path('fos_user_registration_register') }}\">
                                {{'Creer un compte'|trans}}
                                </a>
                            </td>
                               <td></td> 
                            <td>
                                <a href=\"{{ path('annonces_index') }}\">
                                    {{'Voir - Modifier - Supprimer les annonces'|trans}}
                                </a> 
                            </td>
                                    <td></td>
                            <td>
                                <a href=\"{{ path('annonces_new') }}\">
                                    {{'Créer une annonce'|trans}}
                                </a>
                            </td>
                        </tr>
                    </table>
                </p>
            </div>

        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\default\\index.html.twig");
    }
}
