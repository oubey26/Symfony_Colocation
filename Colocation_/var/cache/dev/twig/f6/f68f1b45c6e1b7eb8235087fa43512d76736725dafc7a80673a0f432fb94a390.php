<?php

/* annonces/new.html.twig */
class __TwigTemplate_6fea376e5326a74d96c91fd5206f8b759feefb62ddfaa6ae7679b931bf781b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "annonces/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b8bae89040fac0a59f7cb9e482553021dbbf38f6d22db200d0609ba35b7046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b8bae89040fac0a59f7cb9e482553021dbbf38f6d22db200d0609ba35b7046->enter($__internal_b1b8bae89040fac0a59f7cb9e482553021dbbf38f6d22db200d0609ba35b7046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/new.html.twig"));

        $__internal_980562d7e65b7b397e404dc60eba494a096890b6a6b1b7f05596e567d776d950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980562d7e65b7b397e404dc60eba494a096890b6a6b1b7f05596e567d776d950->enter($__internal_980562d7e65b7b397e404dc60eba494a096890b6a6b1b7f05596e567d776d950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b8bae89040fac0a59f7cb9e482553021dbbf38f6d22db200d0609ba35b7046->leave($__internal_b1b8bae89040fac0a59f7cb9e482553021dbbf38f6d22db200d0609ba35b7046_prof);

        
        $__internal_980562d7e65b7b397e404dc60eba494a096890b6a6b1b7f05596e567d776d950->leave($__internal_980562d7e65b7b397e404dc60eba494a096890b6a6b1b7f05596e567d776d950_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbd21faefd35f5a9000372f1dde4278166d7a1d73492a891ae21907117449327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd21faefd35f5a9000372f1dde4278166d7a1d73492a891ae21907117449327->enter($__internal_bbd21faefd35f5a9000372f1dde4278166d7a1d73492a891ae21907117449327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86ef327b8fa8e78d287d85b12e7e46cd3caef737bc3bfe3bc969d4875091bc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ef327b8fa8e78d287d85b12e7e46cd3caef737bc3bfe3bc969d4875091bc3e->enter($__internal_86ef327b8fa8e78d287d85b12e7e46cd3caef737bc3bfe3bc969d4875091bc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annonce creation"), "html", null, true);
        echo "</h1>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a>
        </li>
    </ul>
";
        
        $__internal_86ef327b8fa8e78d287d85b12e7e46cd3caef737bc3bfe3bc969d4875091bc3e->leave($__internal_86ef327b8fa8e78d287d85b12e7e46cd3caef737bc3bfe3bc969d4875091bc3e_prof);

        
        $__internal_bbd21faefd35f5a9000372f1dde4278166d7a1d73492a891ae21907117449327->leave($__internal_bbd21faefd35f5a9000372f1dde4278166d7a1d73492a891ae21907117449327_prof);

    }

    public function getTemplateName()
    {
        return "annonces/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  63 => 8,  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
    <h1>{{'Annonce creation'|trans}}</h1>
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('annonces_index') }}\">{{'Back to the list'|trans}}</a>
        </li>
    </ul>
{% endblock %}
", "annonces/new.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\new.html.twig");
    }
}
