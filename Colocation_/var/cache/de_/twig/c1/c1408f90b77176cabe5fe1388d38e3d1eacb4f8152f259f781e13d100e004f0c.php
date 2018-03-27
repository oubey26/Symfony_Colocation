<?php

/* :annonces:edit.html.twig */
class __TwigTemplate_9da6570fe90000dc6866050ac2d65f66ca9cccd27ab87daf0675ef19d42daafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":annonces:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d853f88ff60dbd7e9d3f63513969531c265c9f4dacf2eb764803712bfe60145f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d853f88ff60dbd7e9d3f63513969531c265c9f4dacf2eb764803712bfe60145f->enter($__internal_d853f88ff60dbd7e9d3f63513969531c265c9f4dacf2eb764803712bfe60145f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:edit.html.twig"));

        $__internal_149c3ef8e0f62605a0cd69890079db68ba64e59dcdf7e958c6dbce7c5c0fdf38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149c3ef8e0f62605a0cd69890079db68ba64e59dcdf7e958c6dbce7c5c0fdf38->enter($__internal_149c3ef8e0f62605a0cd69890079db68ba64e59dcdf7e958c6dbce7c5c0fdf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d853f88ff60dbd7e9d3f63513969531c265c9f4dacf2eb764803712bfe60145f->leave($__internal_d853f88ff60dbd7e9d3f63513969531c265c9f4dacf2eb764803712bfe60145f_prof);

        
        $__internal_149c3ef8e0f62605a0cd69890079db68ba64e59dcdf7e958c6dbce7c5c0fdf38->leave($__internal_149c3ef8e0f62605a0cd69890079db68ba64e59dcdf7e958c6dbce7c5c0fdf38_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf5065612219ba0f58e662ba3aac11159146dedb202fcd1815fd51223839eeba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5065612219ba0f58e662ba3aac11159146dedb202fcd1815fd51223839eeba->enter($__internal_cf5065612219ba0f58e662ba3aac11159146dedb202fcd1815fd51223839eeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83f92fb4137e1f68abe9f64fa5bd95873822f66aea8f6525d79263bc9b602e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f92fb4137e1f68abe9f64fa5bd95873822f66aea8f6525d79263bc9b602e7c->enter($__internal_83f92fb4137e1f68abe9f64fa5bd95873822f66aea8f6525d79263bc9b602e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annonce edit"), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_83f92fb4137e1f68abe9f64fa5bd95873822f66aea8f6525d79263bc9b602e7c->leave($__internal_83f92fb4137e1f68abe9f64fa5bd95873822f66aea8f6525d79263bc9b602e7c_prof);

        
        $__internal_cf5065612219ba0f58e662ba3aac11159146dedb202fcd1815fd51223839eeba->leave($__internal_cf5065612219ba0f58e662ba3aac11159146dedb202fcd1815fd51223839eeba_prof);

    }

    public function getTemplateName()
    {
        return ":annonces:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  79 => 16,  71 => 13,  64 => 9,  59 => 7,  55 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{'Annonce edit'|trans}}</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('annonces_index') }}\">{{'Back to the list'|trans}}</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":annonces:edit.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/annonces/edit.html.twig");
    }
}
